

<div class="text-black mt-[54px] font-sans">
    <div class="flex gap-4 items-center">
        <h6 class="font-medium font-sans">{{__('Pick-up location')}}</h6>
        <i class='bx bx-map bg-[#ECD84C] p-2'></i>
        <p>{{$locations[$request->PickingUpLocation] ?? ''}}</p>
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 xl:gap-10 gap-2 mt-5">
        <div class="flex gap-2 items-center justify-between">
            <h6 class="font-medium">{{__('Pick-up date')}}</h6>
            <span>{{$request->PickingUpDate ?? ''}}</span>
        </div>
        <div class="flex gap-2 items-center justify-between">
            <h6 class="font-medium">{{__('Pick-up time')}}</h6>
            <span class="flex items-center gap-2 text-[14px]"><i
                    class='bx bx-time-five text-[22px]'></i>{{$request->PickingUpHour ?? ''}}</span>
        </div>
    </div>
</div>
<div class="text-black mt-[22px] font-sans">
    <div class="flex gap-4 items-center">
        <h6 class="font-medium">{{__('Drop-off location')}}</h6>
        <i class='bx bx-map bg-[#ECD84C] p-2'></i>
        <p>{{$locations[$request->DroppingOffLocation] ?? ''}}</p>
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 xl:gap-10 gap-2 mt-5">
        <div class="flex gap-2 items-center justify-between">
            <h6 class="font-medium">{{__('Drop-off date')}}</h6>
            <span>{{$request->DroppingOffDate ?? ''}}</span>
        </div>
        <div class="flex gap-2 items-center justify-between">
            <h6 class="font-medium">{{__('Drop-off time')}}</h6>
            <span class="flex items-center gap-2 text-[14px]"><i
                    class='bx bx-time-five text-[22px]'></i>{{$request->DroppingOffHour ?? ''}}</span>
        </div>
    </div>
</div>
@if($ecommerce_cart['names']['extras'] ?? false)
    <p class="font-bold mt-[22px]">{{__('Extras & Fees')}}</p>
    <div class="flex flex-col xl:flex-row text-black mt-[12px] font-sans gap-4">
        @foreach($ecommerce_cart['names']['extras'] as $item)
            <div class="flex gap-4">
                @if ($item['duration_type'] == 'days')  
                    <div class="flex gap-2">  
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(58, 56, 111);transform: ;msFilter:;">
                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path>
                        </svg>
                        <p>{{$item['name']}}: {{formatted_price($item['price'] * $days )}}</p>
                    </div>
                    @else
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(58, 56, 111);transform: ;msFilter:;">
                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path>
                        </svg>
                        <p><font class="font-medium">{{$item['name']}}:</font> {{formatted_price($item['price'])}}</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endif
<div class="mt-[48px] font-sans font-medium">
    <h6 class="text-[20px] flex items-center gap-2">
        {{__('Total Price')}}
        <span class="text-black font-medium md:text-[32px] text-[20px]">
            {{formatted_price($ecommerce_cart['total_price'] ?? 0)}}</strong> <span>{{__('/')}} {{$days}} {{__('day')}}
        </span>
    </h6>
</div>
                            