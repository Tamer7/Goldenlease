{{-- Additional Div Start  --}}
<div class="h-[80px] bg-white w-full"></div>
{{-- Additional Div End --}}

{{-- Breadcrumb Section Start --}}
<section class="pt-[56px] xl:px-0 md:px-10 px-5">
    <div class="container mx-auto   md:text-center text-left">
        <h6 class="text-[#222222] font-semibold text-[20px]">Home / Cars / Cars detail / Checkout</h6>
        <h4 class="text-[#222222] font-bold md:text-[56px] text-[30px] mt-[22px]">{{ __('Confirmation') }}</h4>
    </div>
</section>
{{-- Breadcrumb Section End --}}

{{-- confirmation Detail Section Start  --}}
<section class="pt-[30px] md:pb-0 pb-[30px] xl:px-0 md:px-10 px-5">
    <form action="{{ route('FrontendCheckoutCharge') }}" method="POST">
        @csrf
        @if($product->alias ?? false && $ecommerce_cart)
        <div class="container mx-auto flex flex-col items-center justify-center text-[#222222]">
            <h5 class="text-center text-[32px]">{{__('Please confirm the following information')}}</h5>
            <div class="xl:w-[40%] lg:w-[50%] md:w-[60%] w-full flex flex-col gap-[24px] mt-[30px]">
                <div class="bg-[#F8F8F8] py-[10px] px-[20px] rounded-[10px]">
                    <h5 class="text-[20px] font-semibold uppercase">Car</h5>
                    <div class="flex items-center gap-4 mt-3">
                        @if($product->img > 0)
                            <div class="h-[100px] w-[150px]">
                                <img class="h-full w-full object-contain"
                                    src="{{ the_image_url($product->img,'thumbnail-350x260') }}" alt="{{$product->title}}">
                            </div>
                        @endif
                        <h6 class="text-[24px] font-semibold"><a href="{{ route('products.show',['alias' => $product->alias]) }}">{{$product->title}}</a></h6>
                    </div>
                </div>
                <div class="bg-[#F8F8F8] py-[10px] px-[20px] rounded-[10px]">
                    <h5 class="text-[20px] font-semibold uppercase">{{__('Pickup')}}</h5>
                    <div class="mt-3 flex flex-col gap-1">
                        <div class="flex items-cetner gap-4 text-[16px] font-medium">
                            <h6 class="font-semibold">{{__('Location:')}}</h6>
                            <span>{{ get_locations_from_slug($ecommerce_cart['PickingUpLocation']) }}</span>
                        </div>
                        <div class="flex items-cetner gap-4 text-[16px] font-medium">
                            <h6 class="font-semibold">{{__('Date:')}}</h6>
                            <span>{{$ecommerce_cart['PickingUpDate']}}</span>
                        </div>
                        <div class="flex items-cetner gap-4 text-[16px] font-medium">
                            <h6 class="font-semibold">{{__('Time:')}}</h6>
                            <span>{{$ecommerce_cart['PickingUpHour']}}</span>
                        </div>
                    </div>
                </div>
                @if(isset($ecommerce_cart['DroppingOffLocation']))
                    <div class="bg-[#F8F8F8] py-[10px] px-[20px] rounded-[10px]">
                        <h5 class="text-[20px] font-semibold uppercase">{{__('Drop Off')}}</h5>
                        <div class="mt-3 flex flex-col gap-1">
                            <div class="flex items-cetner gap-4 text-[16px] font-medium">
                                <h6 class="font-semibold">{{__('Location:')}}</h6>
                                <span>{{ get_locations_from_slug($ecommerce_cart['DroppingOffLocation']) }}</span>
                            </div>
                            <div class="flex items-cetner gap-4 text-[16px] font-medium">
                                <h6 class="font-semibold">{{__('Date:')}}</h6>
                                <span>{{$ecommerce_cart['DroppingOffDate']}}</span>
                            </div>
                            <div class="flex items-cetner gap-4 text-[16px] font-medium">
                                <h6 class="font-semibold">{{__('Time:')}}</h6>
                                <span>{{ $ecommerce_cart['DroppingOffHour'] ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @if($ecommerce_cart['names']['extras'] ?? false)
                    <div class="bg-[#F8F8F8] py-[10px] px-[20px] rounded-[10px]">
                        <h5 class="text-[20px] font-semibold uppercase">{{__('Extras & Fees')}}</h5>
                        <div class="mt-3 flex flex-col gap-1">
                            @foreach($ecommerce_cart['names']['extras'] as $item)
                                <div class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(58, 56, 111);transform: ;msFilter:;">
                                        <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path>
                                    </svg>
                                    <font class="font-semibold">{{$item['name']}}:</font> 
                                    <span>{{formatted_price($item['price'])}}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                <div class="flex items-center justify-between">
                    <h5 class="text-[20px] font-semibold uppercase">{{__('Total Price')}}</h5>
                    <h6 class="text-[30px] font-bold text-[#3A386F]">{{ formatted_price($ecommerce_cart['total_price']) }}</h6>
                </div>
                <div class="text-center">
                    <button class="text-white px-[26px] py-3 rounded-full bg-[#3A386F]">{{__('Confirm')}}</button>
                </div>
            </div>
        </div>
        @else
            <h4>{{ __('Checkout is empty!') }}</h4>
        @endif
    </form>
    @if(is_object($gateway) && method_exists($gateway, 'afterCheckoutForm'))
        {!! $gateway->afterCheckoutForm($product, $ecommerce_cart) !!}
    @endif
</section>
{{-- confirmation Detail Section End --}}
