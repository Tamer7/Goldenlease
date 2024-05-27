<div class="col-md-12 col-xs-12">
    <div class="white-box">
        <h3 class="block-title alt"><b>{{ __('Order items') }}</b></h3>
        <form action="{{ route('FrontendCheckoutCharge') }}" method="POST">
            @csrf
            @if($product->alias ?? false && $ecommerce_cart)
                <div class="order-layout">
                    @if($product->img > 0)
                        <div class="order-image">
                            <img src="{{ the_image_url($product->img,'thumbnail-260x260') }}" alt="{{$product->title}}">
                        </div>
                    @endif
                    <div class="order-details">
                        <h4><a href="{{ route('products.show',['alias' => $product->alias]) }}">{{$product->title}}</a></h4>
                        <!-- Display Rent Data -->
                        <div>
                            <p><b>{{ __('Rent Data') }}:</b></p>
                            <p>{{ __('Start') }}: {{$ecommerce_cart['PickingUpDate'] . ' ' . $ecommerce_cart['PickingUpHour']}}</p>
                            <p>{{ __('End') }}: {{ $ecommerce_cart['DroppingOffDate'] ?? '' }} {{ $ecommerce_cart['DroppingOffHour'] ?? '' }}</p>
                            <p>{{ __('Picking Up Location') }}: {{ get_locations_from_slug($ecommerce_cart['PickingUpLocation']) }}</p>
                            @if(isset($ecommerce_cart['DroppingOffLocation']))
                                <p>{{ __('Dropping Off Location') }}: {{ get_locations_from_slug($ecommerce_cart['DroppingOffLocation']) }}</p>
                            @endif
                        </div>
                        <!-- Display Extras & Frees -->
                        @if($ecommerce_cart['names']['extras'] ?? false)
                            <div>
                                <p><b>{{ __('Extras & Frees') }}</b></p>
                                @foreach($ecommerce_cart['names']['extras'] as $item)
                                    <p>&nbsp;&nbsp;{{$item['name']}}: {{formatted_price($item['price'])}}</p>
                                @endforeach
                            </div>
                        @endif
                        <p><b>{{ __('Total Price') }}:</b> {{ formatted_price($ecommerce_cart['total_price']) }}</p>
                        <!-- Coupon Code Input -->
                        <div class="coupon-code">
                            <input type="text" name="coupon_code" class="form-control" placeholder="Coupon code">
                            <button type="button" class="btn btn-theme btn-apply-coupon">Apply Coupon</button>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-theme btn-reservation-now">{{ __('Place order') }}</button>
            @else
                <h4>{{ __('Checkout is empty!') }}</h4>
            @endif
        </form>
        @if(is_object($gateway) && method_exists($gateway, 'afterCheckoutForm'))
            {!! $gateway->afterCheckoutForm($product, $ecommerce_cart) !!}
        @endif
    </div>
</div>
<style>
    .order-layout {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
    .order-image img {
        max-width: 50%;
        height: auto;
    }
    .order-details {
        flex-grow: 1;
        margin-left: 20px;
    }
    .coupon-code {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        align-items: center;
    }
    .btn-apply-coupon, .btn-reservation-now {
        margin-top: 20px;
    }
    .btn-reservation-now {
        display: block;
        width: 100%;
        margin-top: 10px; /* Adjust based on your layout */
    }
</style>
