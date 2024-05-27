{{-- @if (count($errors) > 0)
<div class="row">
    <div class="col-md-12">
        @foreach ($errors->all() as $error)
                <div class="alert alert-danger fade in">
                    <button class="close" data-dismiss="alert" type="button">×</button>
                    <strong>{{ $error }}</strong>
                </div>
            @endforeach

        </div>

    </div>
@endif --}}

@if (session('status'))
    <div class="row">
        <div class="col-md-12">

            <div class=" alert alert-success">
                <button class="close" data-dismiss="alert" type="button">×</button>
                <strong>{{ session('status') }}</strong>
            </div>


        </div>
    </div>
@endif

{{-- Additional Div Start  --}}
<div class="h-[80px] bg-white w-full"></div>
{{-- Additional Div End --}}

{{-- Breadcrumb Section Start --}}
<section class="pt-[56px] xl:px-0 md:px-10 px-5">
    <div class="container mx-auto   md:text-center text-left">
        <h6 class="text-[#222222] font-semibold text-[20px] upperscase">Home / Cars / Cars detail</h6>
        <h4 class="text-[#222222] font-bold md:text-[56px] text-[30px] mt-[22px]">{{__('Car Details')}}</h4>
    </div>
</section>
{{-- Breadcrumb Section End --}}

{{-- Car Information Section Start  --}}
<section class="xl:py-[100px] lg:py-20 md:py-10 py-[30px] xl:px-0 md:px-10 px-5 relative">
    {{-- Car Images & Form  --}}
    <div class="container mx-auto grid grid-cols-12 gap-5">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="col-span-12">
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif
        {{-- Car Images  --}}
        <div class="md:col-span-7 col-span-12">
            <div>
                <div class="bg-[#F8F8F8] lg:h-[774px] md:h-[500px] h-[290px]">
                    @if( $product->img ?? false )
                        {{-- <a href="{{ the_image_url($product->img,'full') }}" data-gal="prettyPhoto"> --}}
                            <img class="h-full w-full object-contain"
                            src="{{ the_image_url($product->img,'thumbnail-600x426') }}">
                        {{-- </a> --}}
                    @endif
                </div>
                @if( is_array($gallery_media) && !empty($gallery_media) )
                <div class="grid grid-cols-3 mt-[26px] md:gap-[26px] gap-5">
                    @if( $product->img ?? false )
                        <div class="md:h-[240px] h-[86px]">
                            <img class="h-full w-full object-contain"
                            src="{{ the_image_url($product->img,'thumbnail-600x426') }}">
                        </div>
                    @endif
                    @foreach($gallery_media as $k => $item)
                        @if($k < 2)
                            {{-- <a href="{{ the_image_url($item,'thumbnail-600x426')}}" data-gal="prettyPhoto"> --}}
                                <div class="md:h-[240px] h-[86px]">
                                    <img class="h-full w-full object-contain img-responsive"
                                    src="{{ the_image_url($item,'thumbnail-600x426')}}" alt="">
                                </div>
                            {{-- </a> --}}
                        @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        {{-- Detail & Specifications   --}}
        <div class="md:col-span-5 col-span-12 ">
            <div class="md:sticky static md:top-[80px] top-0 overflow-y-auto">
                {{-- Detail info  --}}
                <div class="text-left">
                    <h4 class="text-[#222222] font-bold md:text-[56px] text-[36px] md:text-center text-left">
                        {{$product->title}}
                    </h4>
                    <h6 class="text-[#666666] font-semibold text-[20px] uppercase mt-5">Starting AT</h6>
                    <div class="price">
                        <span class="text-black font-medium md:text-[48px] text-[38px]"><strong>{!! ec_price($price)!!}</strong>{{__('/day')}}</span>
                    </div>
                    <div class="product-details-text">
                        {!! $product->text ?? '' !!}
                    </div>
                </div>
                {{-- specification --}}
                @if(isset($product_meta['product_icons']) ?? false)
                    @php
                        $product_icons = unserialize($product_meta['product_icons']);
                        $specifications = array_combine($product_icons['icon'], $product_icons['text']);
                    @endphp
                    @if ($specifications)                                
                        <div class="mt-5 text-black">
                            <h6 class="text-[18px] font-medium md:text-center text-left">SPECIFICATIONS</h6>
                            <div class="flex justify-center mt-5">
                                <ul class="grid grid-cols-2 xl:w-[60%] w-full lg:gap-3 gap-2">
                                    @foreach($specifications as $key => $spec)
                                        @if ($spec)
                                            <li class="flex items-center gap-3">
                                                <i class="fa {{$key ?? ''}} text-[#3A386F] text-[20px]" aria-hidden="true"></i>
                                                <span class="text-[18px] font-medium">{{$spec}}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                @endif
            </div>  
        </div>
    </div>
    {{-- Form & Checkout  --}}
    <form action="{{route('products.store')}}" method="POST" class="form-booking_a_car">
        @csrf
        <div class="container mx-auto grid lg:grid-cols-12 grid-cols-1 xl:gap-20 gap-10 mt-[48px]">
            {{-- Form  --}}
            <div class="lg:col-span-7 col-span-1 text-black w-full">
                {{-- Extras & Frees field  --}}
                <div class="mt-0 ">
                    <h4 class="md:text-[28px] text-[20px] font-semibold">{{__('Extras & Frees')}}</h4>
                    <div class="md:w-[60%] w-full flex flex-col gap-5 mt-5 form-extras" role="form">
                        @if(isset($product_meta['_rental_resource']) && $rental_resource = json_decode($product_meta['_rental_resource']) )
                            @php
                                $collection = [];
                                if(isset($rental_resource->item_name)){
                                    foreach ($rental_resource->item_name as $j => $name) {
                                        $checked = false;
                                        $disable = false;
                                        $duration_type = '';
                                        if ( $rental_resource->duration_type[$j] == 'hours' )
                                        $duration_type = __( 'Hour' );
                                        if ( $rental_resource->duration_type[$j] == 'days' )
                                            $duration_type = __( 'Days' );

                                        if ( $rental_resource->duration_type[$j] == 'Total' )
                                            $duration_type = __( 'Total' );

                                        if ( $rental_resource->duration_type[$j] == 'Included' )
                                            $duration_type = __( 'Included' );

                                        if ( $rental_resource->duration_type[$j] == 'fixed_change' )
                                            $duration_type = __( 'Fixed change' );
                                            $collection[] = [
                                                'id' => $j,
                                                'item_name' => $name,
                                                'quantity' => $rental_resource->quantity[$j] ?? '',
                                                'cost' => $rental_resource->cost[$j] ?? '',
                                                'duration_type' => $rental_resource->duration_type[$j] ?? '',
                                                'type' => $duration_type,
                                                'checked' => $checked,
                                                'disable' => $disable

                                            ];
                                    }

                                    $quantity = count( $collection );

                                    $collection1 = array_slice( $collection, 0, intval( ceil( $quantity / 2 ) ), true );
                                    $collection2 = array_diff_key( $collection, $collection1 );
                                }
                                // $i = 0;
                            @endphp
                        @endif
                        @if($collection)
                            @foreach($collection as $key =>$item)
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-3 checkbox">
                                        <input
                                            class="px-3 py-4 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F]"
                                            type="checkbox" 
                                            placeholder="" 
                                            name="checkbox_extras[{{$key}}]" 
                                            id="checkbox_{{$item['item_name']}}"
                                            @php 
                                                if ($item['checked'] == true) {
                                                    echo 'checked="" value="on"';
                                                } 
                                                if ($item['disable'] == true) {
                                                    echo 'disabled="disabled"';
                                                }
                                            @endphp
                                        >
                                        <label class="text-black font-medium pull-right" for="checkbox_{{$item['item_name']}}">{{$item['item_name']}}</label>
                                    </div>
                                    <span class="text-[#7a7a7a]">{{formatted_price($item['cost'])}} / {{$item['type']}}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                {{-- Picking & Dropping field  --}}
                @php
                    $picking_up_location = json_decode( $product_meta['__picking_up_location'] ?? '' );
			        $dropping_off = json_decode( $product_meta['__dropping_off_location'] ?? '' );
                @endphp
                <div class="mt-5 ">
                    <h4 class="md:text-[28px] text-[20px] font-semibold">{{__('Picking / Dropping Location')}}</h4>
                    <div class="grid md:grid-cols-2 grid-cols-1  xl:gap-10 gap-6 mt-5">
                        <div class="relative md:col-span-2 col-span-1">
                            <label class="text-black md:text-[20px] text-base font-medium" for="formSearchUpLocation">{{__('Picking Up Location')}}</label>
                            @if($locations)
                                <select 
                                    id="pickup-location-select"
                                    name="PickingUpLocation" 
                                    class=" input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3" 
                                    data-live-search="true" 
                                    data-width="100%"
                                    data-toggle="tooltip" 
                                    title="Select"
                                >
                                    @foreach($locations as $location)
                                        @if( is_array($picking_up_location) && in_array($location->alias,  $picking_up_location) )
                                            <option value="{{$location->alias}}" {{old( 'PickingUpLocation') || session('PickingUpLocation') ==  $location->alias ? 'selected' : ''}}>{{$location->title}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            @endif
                        </div>
                        <div class="relative col-span-1">
                            <label class="text-black md:text-[20px] text-base font-medium">{{__('Picking Up Date')}}</label>
                                <input 
                                    type="text" 
                                    class="block w-full lg:p-4 md:p-3 p-2  border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3 form-control PickingUpDate"
                                    {{-- id="formSearchUpDate3" --}}
                                    id="PickingUpDate" 
                                    value="{{old('PickingUpDate', session('PickingUpDate'))}}"
                                    placeholder="{{get_theme_mod('rentit_calendar_format', 'MM/DD/YYYY')}}"
                                    name="PickingUpDate"
                                >
                        </div>
                        <div class="relative col-span-1">
                            <label class="text-black md:text-[20px] text-base font-medium">{{__('Picking Up Hour')}}</label>
                            @php
                                $times = rentit_get_times();
                            @endphp
                            @if($times && is_array($times))
                                <select
                                    id="pickup-hour-select"
                                    name="PickingUpHour"
                                    class=" input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3" 
                                    data-live-search="true" 
                                    data-width="100%"
                                    data-toggle="tooltip" 
                                    title="Select"
                                >
                                @foreach($times as $time)
                                    <option value="{{$time}}" {{old('PickingUpHour') || session('PickingUpHour') == $time ? 'selected' : ''}}>{{$time}}</option>
                                @endforeach
                                </select>
                            @endif
                        </div>
                        <div class="relative md:col-span-2 col-span-1">
                            <label class="text-black md:text-[20px] text-base font-medium">{{__('Dropping Off Location')}}</label>
                            <select name="DroppingOffLocation"
                                id="dropoff-location-select"
                                class=" input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3 " 
                                data-live-search="true" 
                                data-width="100%"
                                data-toggle="tooltip" 
                                title="Select"
                            >
                                @if($locations)
                                    @foreach($locations as $location)
                                        @if( is_array($dropping_off) && in_array($location->alias,  $dropping_off) )
                                            <option
                                                {{old( 'DroppingOffLocation') || session('DroppingOffLocation') == $location->alias ? 'selected' : ''}}
                                                value="{{$location->alias}}">{{$location->title}}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="relative col-span-1">
                            <label class="text-black md:text-[20px] text-base font-medium">{{__('Dropping Off Date')}}</label>
                            <input 
                                type="text" 
                                autocomplete="off" 
                                id="DroppingOffDate"
                                value="{{old('DroppingOffDate', session('DroppingOffDate'))}}" 
                                name="DroppingOffDate" 
                                placeholder="{{get_theme_mod('rentit_calendar_format', 'MM/DD/YYYY')}}"
                                class="block w-full lg:p-4 md:p-3 p-2  border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3 DroppingOffDate"
                                {{old('DroppingOffDate', session('DroppingOffDate')) ?? 'disabled'}}
                            >
                        </div>
                        <div class="relative col-span-1">
                            <label class="text-black md:text-[20px] text-base font-medium">{{__('Dropping Off Hour')}}</label>
                                <select 
                                    id="droppingof-hour-select"
                                    name="DroppingOffHour"
                                    class=" input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3" data-live-search="true" data-width="100%"
                                    data-toggle="tooltip" title="Select"
                                >
                                @if($times && is_array($times))
                                    @foreach($times as $time)
                                        <option
                                            {{old( 'DroppingOffHour') || session('DroppingOffHour') == $time ? 'selected' : ''}}  value="{{$time}}">{{$time}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                {{-- customer info field  --}}
                <div class="mt-5">
                    <div>
                        <h4 class="md:text-[28px] text-[20px] font-semibold">Customer Information</h4>
                    </div>
                    <div class="grid md:grid-cols-2 grid-cols-1 xl:gap-10 gap-6 mt-5 form-delivery">
                        <div class="custom-radio-group md:col-span-2 col-span-1">
                            <div class="radio radio-item">
                                <input class="radio-input" 
                                    type="radio"
                                    <?php  checked( old( 'gender' ), 'Mr' ); ?>  
                                    id="inlineRadio1" 
                                    value="Mr"
                                    name="gender" 
                                    checked=""
                                >
                                <label class="radio-label" for="inlineRadio1">{{__('Mr')}}</label>
                            </div>
                            <div class="radio radio-item">
                                <input 
                                    class="radio-input" 
                                    type="radio" 
                                    <?php  checked( old( 'gender' ), 'Ms' ); ?>  
                                    id="inlineRadio2" 
                                    value="Ms"
                                    name="gender"
                                >
                                <label class="radio-label" for="inlineRadio2">{{__('Ms')}}</label>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label class="text-black md:text-[20px] text-base font-medium ">{{__('Name')}}<span
                                    class="text-red-600">
                                    *</span></label>
                            <input
                                class="lg:p-4 md:p-3 p-2  border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] form-control alt"
                                name="name"
                                type="text" 
                                placeholder="{{__('Name and Surname:')}}*"
                                id="fd-name" 
                                title="{{__('Name is required')}}" 
                                data-toggle="tooltip"
                            >
                        </div>
                        <div class="flex flex-col gap-3">
                            <label class="text-black md:text-[20px] text-base font-medium ">Email<span
                                    class="text-red-600">
                                    *</span></label>
                            <input
                                class="lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] form-control alt"
                                name="email"
                                type="text" 
                                id="fd-email"
                                title="{{__('Email is required')}}"
                                data-toggle="tooltip"
                                value="{{  $errors->has('email') ?? old('email')}}"
                                placeholder="{{__('Your Email Address:*')}}"
                            >
                        </div>
                        <div class="flex flex-col gap-3">
                            <label class="text-black md:text-[20px] text-base font-medium ">Phone number<span
                                    class="text-red-600">
                                    *</span></label>
                            <input
                                class="lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] form-control alt"
                                type="number" 
                                name="phone"
                                id="fd-phone"
                                data-toggle="tooltip"
                                value="{{  $errors->has('phone') ?? old('phone')}}"
                                title="{{__('Phone number is required')}}"
                                placeholder="{{__('Phone Number:')}}"
                            >
                        </div>
                        <div class="flex flex-col gap-3">
                            <label class="text-black md:text-[20px] text-base font-medium ">Address<span
                                    class="text-red-600">
                                    *</span></label>
                            <input
                                class="lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] form-control alt"
                                type="text" 
                                name="street_address"
                                value="{{old('street_address')}}"
                                placeholder="{{__('Street address *')}}"
                            >
                        </div>
                    </div>
                </div>
                {{-- Additional Information  --}}
                {{-- <div class="mt-5 ">
                    <div>
                        <h4 class="md:text-[28px] text-[20px] font-semibold">{{__('Additional Information')}}</h4>
                    </div>
                    <div class=" mt-5">
                        <textarea rows="5"
                            class="w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F]"
                            type="text" 
                            placeholder="Additional Inforamtion">
                        </textarea>
                    </div>
                </div> --}}
            </div>
            {{-- Checkout  --}}
            <div class="lg:col-span-5 col-span-1">
                <div class="sticky static top-[80px] overflow-y-auto widget-details-reservation">
                    <div class="text-black">
                        <h6 class="text-[36px] font-semibold text-center">Checkout</h6>
                    </div>
                    <div class="widget-content">
                        
                    </div>
                    <div class="mt-[48px] font-sans text-black flex items-center gap-4">
                        <input id="accept" type="checkbox" name="fd-name" title="Please accept" data-toggle="tooltip">
                        <label for="accept" class="font-medium">{{__('I accept all information and Payments etc')}}</label>
                    </div>
                    <div>
                        <input type="hidden" name="product_id" value="{{$product->id ?? ''}}">
                        <input type="hidden" name="product_url" value="{{url()->current()}}">
                        @if($available_gateways = $PaymentGateways->get_available_payment_gateways())
                            @foreach($available_gateways as $gateway)
                                @if ($gateway->id == "cheque")
                                    <input type="hidden" value="{{$gateway->id}}" name="payment">
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="reservation-now">
                        <button type="submit" id="book-vehicle-btn"
                            class="bg-[#3A386F] px-[26px] py-[10px] text-white rounded-full font-bold mt-[48px] btn-reservation-now">{{__('Book Now')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
{{-- Car Information Section End  --}}
{{-- Car Features Section Start  --}}
@if(isset($product_meta['attributes'][1]))
    @php
        $attr = json_decode( $product_meta['attributes'] );
    @endphp
    @if ($attr) 
        <section class="xl:pb-[100px] pb-20 xl:px-0 md:pl-10 pl-5 relative">
            <div class="container mx-auto grid grid-cols-12">
                <div class="lg:col-span-3 col-span-12">
                    <h4 class="text-black md:text-[48px] text-[28px] font-bold ">Car Features</h4>
                </div>
                <div
                    class="lg:col-span-9 col-span-12 lg:grid lg:grid-cols-2 flex lg:gap-[30px] gap-[24px] lg:mt-0 mt-[36px] overflow-x-auto"
                >
                    @foreach($attr->value as $key => $item)
                        @if ($item)
                            <div class="bg-[#F8F8F8] rounded-[10px] px-5 py-[10px] lg:min-w-auto min-w-[200px]">
                                <h6 class="font-semibold text-[#222222] text-[20px] uppercase">
                                    {{$item}}
                                </h6>
                                {{-- <p class="mt-3 text-[#636363] text-[18px] font-medium">
                                    Enjoy the open-air experience with an easy power-operated convertible top.
                                </p> --}}
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endif
{{-- Car Features Section End  --}}

{{-- Relevant Car  Section Start  --}}
@if ($related_products && count($related_products) > 0)      
    <section class="lg:pb-0 pb-[54px] xl:px-0 md:px-10  relative">
        <div class="container mx-auto">
            <div class="md:flex block justify-between  items-center">
                <h4 class="text-black md:text-left text-center font-medium md:text-[48px] text-[28px]">{{__('You may also like')}}
                </h4>
                <div class="relevant-slides-btn md:flex hidden items-center md:gap-[24px] gap-3 ">
                    <div class="swiper-button-prev-best">
                        <i class='bx bx-arrow-back text-white ml-[12px]' style="font-size: 25px"></i>
                    </div>
                    <div class="swiper-button-next-best">
                        <i class='bx bx-arrow-back text-white ml-[12px] rotate-[180deg]' style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
            <div class="mt-[56px]">
                <div class="relevantSlides overflow-hidden p-[10px]  md:mt-0 mt-[30px] relative">
                    <div class="swiper-wrapper">
                        @foreach ($related_products as $related_product)
                            <div class="swiper-slide">
                                <a href="{{ route('products.show', ['products' => $related_product->alias]) }}">
                                    <div
                                        class="swiper-content bg-[#F8F8F8] rounded-[10px] p-3 group hover:bg-[#B19158] cursor-pointer">
                                        <div class="w-full h-[160px] bg-white ">
                                            <img class="h-full w-full object-contain"
                                                src="{{ the_image_url($related_product->img) }}" alt="">
                                        </div>
                                        <div class="text-black group-hover:text-white text-center font-bold py-5">
                                            <h6>{{ $related_product->title }}
                                            </h6>
                                            <span class="font-semibold">{{ formatted_price($related_product->price) }} {{ __('/day') }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="relevant-slides-btn md:hidden flex justify-center items-center gap-[24px] mt-5">
                    <div class="swiper-button-prev-best">
                        <i class='bx bx-arrow-back text-white ml-[12px]' style="font-size: 25px"></i>
                    </div>
                    <div class="swiper-button-next-best">
                        <i class='bx bx-arrow-back text-white ml-[12px] rotate-[180deg]' style="font-size: 25px"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

{{-- Relevant Car  Section End  --}}
<script>
    $(document).ready(function() {
        $('#pickup-location-select').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Pickup Location',
            allowClear: true,
            closeOnSelect: true,
        });
        $('#pickup-hour-select').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Pickup Time',
            allowClear: true,
            closeOnSelect: true,
        });
        $('#dropoff-location-select').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Select an option',
            allowClear: true,
            closeOnSelect: true,
        });
        $('#droppingof-hour-select').select2({
            theme: 'classic',
            width: '100%',
            placeholder: 'Drop off time',
            allowClear: true,
            closeOnSelect: true,
        });
        handleBookNowBtn();
    });
    function handleBookNowBtn()
    {
        const pickupSelectElement = document.getElementById('pickup-location-select');
        const dropoffSelectElement = document.getElementById('dropoff-location-select');
        const bookVehicleBtn = document.getElementById('book-vehicle-btn');

        const pickupLocationsCount = pickupSelectElement.options.length;
        const dropoffLocationsCount = dropoffSelectElement.options.length;

        if (pickupLocationsCount < 1 || dropoffLocationsCount < 1) {
            bookVehicleBtn.disabled = true;
            bookVehicleBtn.style.opacity = 0.5;
            bookVehicleBtn.innerText = 'Sorry, Not Available';
        } 
        else {
            bookVehicleBtn.disabled = false;
            bookVehicleBtn.style.opacity = 1;
            bookVehicleBtn.innerText = 'Book Now';
        }
    }
</script>