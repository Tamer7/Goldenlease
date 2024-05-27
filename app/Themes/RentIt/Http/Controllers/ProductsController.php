<?php

namespace Corp\Themes\RentIt\Http\Controllers;


use Auth;
use Cache;
use Corp\Plugins\eCommerce\Gateways\PaymentGateways;
use Corp\Plugins\eCommerce\Models\Booking;
use Corp\Plugins\eCommerce\Models\Location;
use Corp\Plugins\eCommerce\Models\Order;
use Corp\Plugins\eCommerce\Models\Product;
use Corp\Plugins\eCommerce\Models\Term;
use Corp\Plugins\eCommerce\Repositories\OrderRepository;
use Corp\Plugins\eCommerce\Repositories\ProductRepository;
use Corp\Plugins\eCommerce\Requests\OrderAddRequest;
use Corp\Themes\RentIt\RentItTheme;
use DB;
use Eventy;

class ProductsController extends RentItTheme
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $product_id;

    protected $order_rep;
    protected $product_rep;


    public function __construct(ProductRepository $product_rep)
    {

        $this->product_rep = $product_rep;

        parent:: __construct();


        $this->template = 'theme:rentit::products';
        $this->baseCms
            ->setFrontendJs(
                'icheck',
                asset(config('settings.admin').'/plugins/components/icheck/icheck.min.js'),
                [],
                1,
                true,
                2
            )
            ->setFrontendJs(
                'icheck-init',
                asset(config('settings.admin').'/plugins/components/icheck/icheck.init.js'),
                array('jquery'),
                '1',
                true,
                10
            )
            ->setFrontendJs(
                'icheck-init',
                asset(config('settings.admin').'/plugins/components/icheck/icheck.init.js'),
                array('jquery'),
                '1',
                true,
                10
            )
            ->setFrontendCss(
                'icheck',
                asset(config('settings.admin').'/plugins/components/icheck/skins/all.css'),
                array('jquery'),
                '1',
                true,
                10
            )
            ->setFrontendCss(
                'bootstrap-datetimepicker',
                asset(config('settings.theme').'/assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css')
            )
            ->setFrontendJs( 'rentit-main', asset( config( 'settings.theme' ) . '/assets/js/main.js' ), [
				'jquery',
				'rentit-theme'
			], 1, true, 15 )
            ->localizedFrontendJs( 'rentit-main', 'rentit_obj',
				[
					'news_letter_widget' => route( 'NewsLetterWidget' ),
					'PreviewReservation' => route( 'PreviewReservation' ),
					'date_format' => get_theme_mod( 'rentit_calendar_format', 'MM/DD/YYYY' ),
					'lang' => get_theme_mod( 'rentit_calendar_lang', '' ),
					'last_cat' => "popular-cars",
					'global_map_styles' => '',
					'lat' => '34.800155',
					'longu' => '33.030800',
					'zum' => '10',
					'theme_url' => url( 'rentit' ),
					'currency' => "$",
					'currency_pos' => "left",
					'coupon' => route( 'FrontendCheckoutCoupon' )

				]
			);

    }


    /** Product list page
     * @param bool $cat_alias
     * @return ProductsController|string
     * @throws \Throwable
     */
    public function index(\Illuminate\Http\Request $request, $term_alias = false)
    {
        //

        $this->fillSession($request);
        
        $this->title = getControllerTitle(__('Products'));


        $products = $this->product_rep->getProducts($request, $term_alias);
        $products->load('meta.translations', 'translations');

        $page_title = __('CAR LISTING');
        if ($term_alias) {
            $page_title = Term::where('alias', $term_alias)->first()->title;
        }

        $breadcrumbs = $this->getTemplate('breadcrumbs', ['title' => $page_title]);


        // $sidebar = $this->getTemplate('sidebar', ['sidebar' => 'rentit-sidebar-shop']);
        $footer = $this->getTemplate('footer', ['hide_widgets' => true]);

        $sidebar = $this->getTemplate('sidebar', ['sidebar' => 'rentit-sidebar-shop']);
        $content = $this->getTemplate('products.content', compact('products','sidebar'));

        $this->vars = array_add($this->vars, 'content', $content);
        $this->vars = array_add($this->vars, 'breadcrumbs', $breadcrumbs);
        $this->vars = array_add($this->vars, 'sidebar', $sidebar);
        $this->vars = array_add($this->vars, 'footer', $footer);


        return $this->renderOutput();
    }

    /**
     * save sessions
     * @param $request
     */
    public function fillSession($request)
    {
        if (isset($request->PickingUpDate)) {
            session(['PickingUpDate' => $request->PickingUpDate]);

        }
        if (isset($request->DroppingOffDate)) {
            session(['DroppingOffDate' => $request->DroppingOffDate]);

        }
        if (isset($request->PickingUpHour)) {
            session(['PickingUpHour' => $request->PickingUpHour]);
        }
        if (isset($request->DroppingOffHour)) {
            session(['DroppingOffHour' => $request->DroppingOffHour]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($alias)
    {


        //
        $product = Product::with('translations', 'meta')->where('alias', $alias)->first();

        $this->title = getControllerTitle($product->title);
        $this->keywords = ($product->keywords);
        $this->description = ($product->meta_desc);


        $this->product_id = $product->id;
        $this->bookingDate($product->id);

        $gallery_media = $product->meta()->where('name', 'gallery_media')->select('value')->first();
        if ($gallery_media->value ?? false) {
            $gallery_media = explode(',', $gallery_media->value);
        }


        // get product meta and convert it to key value

        $product_meta = getProductMetas($product);


        $locations = Location::with('translations')->get();

        $price = $product->getPriceWithSeason();

        // payment

        $PaymentGateways = PaymentGateways::instance();

        $related_products = [];
        $terms = Term::whereRaw( "id in(SELECT term_id FROM `ec_terms_product` GROUP BY term_id)")
                ->with( 'translations', 'products', 'products.translations', 'products.meta', 'products.meta.translations' )
                ->get();
        foreach($terms as $term)
        {
            if ($term->products)
            {
                foreach ($term->products as $related_product)
                {
                    if($related_product->id !== $product->id)
                    {
                        $related_products [] = $related_product;
                    }
                }
            }
        }
        $content = $this->getTemplate(
            'products.single',
            compact(
                'PaymentGateways',
                'product',
                'gallery_media',
                'product_meta',
                'locations',
                'price',
                'related_products',
            )
        );

        $breadcrumbs = $this->getTemplate('breadcrumbs', ['title' => __('CAR LISTING')]);
        $sidebar = $this->getTemplate('sidebar', ['sidebar' => 'rentit-single-product']);
        $footer = $this->getTemplate('footer', ['hide_widgets' => true]);

        $this->vars = array_add($this->vars, 'content', $content);
        $this->vars = array_add($this->vars, 'breadcrumbs', $breadcrumbs);
        $this->vars = array_add($this->vars, 'sidebar', $sidebar);
        $this->vars = array_add($this->vars, 'footer', $footer);


        return $this->renderOutput();
    }


    public function bookingDate($id)
    {

        $arrayOfDates = [];
        $rentit_obj = $this->baseCms->getLocalizedFrontendJs('rentit-main', 'rentit_obj');

        $bookings = Booking::where('product_id', $id)->get();

        $arrayOfDates = [];

        //dump($bookings);

        foreach ($bookings as $booking) {


            if (isset($booking->order->status) && $booking->order->status == 'canceled') {
                continue;
            }
            $num_days = floor($booking->DroppingOffDate - $booking->PickingUpDate) / (60 * 60 * 24);


            for ($i = 0; $i < $num_days; $i++) {
                $next_day = strtotime("+".$i." day", $booking->PickingUpDate);
                $arrayOfDates[] = date("m/d/Y H:m", $next_day);
            }

        }

        $rentit_obj['reserved_date'] = $arrayOfDates;
        $this->baseCms->localizedFrontendJs('rentit-main', 'rentit_obj', $rentit_obj);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRepository $order_rep, OrderAddRequest $request, Order $order)
    {
        //

        // dd($request->all());
        $order_rep->AddToCart($request);

        return redirect()->route('FrontendCheckout');


    }


}
