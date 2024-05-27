<ul class="flex flex-col gap-[30px]">
    <li class="product-select">
        <select name="PickingUpLocation"
            class="select2 input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3"
            id="pickupLocation">
            <option selected disabled></option>
            @if ($locations ?? false)
                @foreach ($locations as $location)
                    <option value="{{ $location->alias }}"
                        {{ old('PickingUpLocation') || session('PickingUpLocation') == $location->alias ? 'selected' : ''}}>
                        {{ $location->title }}
                    </option>
                @endforeach
            @endif
        </select>
        <div>
            <i class='bx bx-arrow-back rotate-[-90deg] absolute top-[30px] right-[26px] text-[20px]'></i>                
        </div>
    </li>
    <li class="product-select">
        <input type="text"
            class="block w-full p-4 border border-black rounded-full text-[16px] text-black focus:outline-none focus:border-[#3A386F] mt-3 form-control PickingUpDate"
            style="width: 100%;" id="formSearchUpDate" value="{{ old('PickingUpDate', session('PickingUpDate')) }}"
            placeholder="Pickup Date" name="PickingUpDate"
        >
        <div>
            <i class='bx bx-arrow-back rotate-[-90deg] absolute top-[30px] right-[26px] text-[20px]'></i>                
        </div>
    </li>
    <li class="product-select">
        @php
            $times = rentit_get_times();
        @endphp
        @if ($times && is_array($times))
            <select id="pickupTime" name="PickingUpHour"
                class=" input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3"
                data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
                <option selected disabled></option>
                @foreach ($times as $time)
                    <option value="{{ $time }}"
                        placeholder="{{ get_theme_mod('rentit_calendar_format', 'MM/DD/YYYY') }}"
                        {{ old('PickingUpHour')|| session('PickingUpHour') == $time ? 'selected' : '' }}>
                        {{ $time }}
                    </option>
                @endforeach
            </select>
        @endif
        <div>
            <i class='bx bx-arrow-back rotate-[-90deg] absolute top-[30px] right-[26px] text-[20px]'></i>                
        </div>
    </li>
    <li class="product-select">
        <select id="dropOffLocationSelect" name="DroppingOffLocation"
            class=" input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3"
            data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
            @if($locations)
                <option selected disabled></option>
                @foreach ($locations as $location)
                    <option value="{{$location->alias}}"
                        {{ old('DroppingOffLocation') || session('DroppingOffLocation') ==  $location->alias ? 'selected' : '' }}>
                        {{$location->title}}
                    </option>
                @endforeach
            @endif
        </select>   
        <div>
            <i class='bx bx-arrow-back rotate-[-90deg] absolute top-[30px] right-[26px] text-[20px]'></i>                
        </div>
    </li>
    <li class="product-select">
        <input type="text" autocomplete="off" value="{{ old('DroppingOffDate', session('DroppingOffDate')) }}"
            name="DroppingOffDate" placeholder="Drop off Date"
            class="block w-full p-4 border border-black rounded-full text-[16px] text-black focus:outline-none focus:border-[#3A386F] mt-3 DroppingOffDate"
            {{old('DroppingOffDate', session('DroppingOffDate')) ?? 'disabled'}}
        >
        <div>
            <i class='bx bx-arrow-back rotate-[-90deg] absolute top-[30px] right-[26px] text-[20px]'></i>                
        </div>
    </li>
    <li class="product-select">
        <select id="dropOffTime" name="DroppingOffHour"
            class=" input-price searchInput block w-full lg:p-4 md:p-3 p-2 border border-[#D2D2D2] text-[16px] text-[#A5A5A5] focus:outline-none focus:border-[#3A386F] mt-3"
            data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
            @if ($times && is_array($times))
                <option selected disabled></option>
                @foreach ($times as $time)
                    <option value="{{ $time }}"
                        {{ old('DroppingOffHour') || session('DroppingOffHour') ==  $time ? 'selected' : '' }}>
                        {{ $time }}
                    </option>
                @endforeach
            @endif
        </select>   
        <div>
            <i class='bx bx-arrow-back rotate-[-90deg] absolute top-[30px] right-[26px] text-[20px]'></i>                
        </div>
    </li>
</ul>
<div class="product-select">
    <input type="submit" id="formSearchSubmit3"
        class="text-white font-bold bg-[#3A386F] px-[26px] py-[10px] rounded-full w-full btn-submit mt-[30px] cursor-pointer"
        value="{{ __('Find Car') }}">
</div>
