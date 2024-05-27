{{-- Additional Div Start  --}}
<div class="h-[80px] bg-white w-full"></div>
{{-- Additional Div End --}}

{{-- Breadcrumb Section Start --}}
<section class="pt-[56px] xl:px-0 md:px-10 px-5">
    <div class="container mx-auto   md:text-center text-left">
        <h6 class="text-[#222222] font-semibold text-[20px] uppercase">Home / Cars / Cars detail</h6>
        <h4 class="text-[#222222] font-bold md:text-[56px] text-[30px] mt-[22px]">{{ __('Successful confirmation') }}
        </h4>
    </div>
</section>
{{-- Breadcrumb Section End --}}

{{-- Thank Section Start  --}}
<section class="xl:px-0 md:px-10 px-5 pt-[30px] lg:pb-0 pb-[30px]">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <p class="lg:w-[80%] w-full text-[#222222] text-[32px] ">
            {{__('Congratulations! reservation confirmed, Thank you for choosing golden lease and Please await our email')}}
        </p>
        <div class="lg:h-[728px] h-[400px] lg:w-[90%] w-full bg-[#F8F8F8] rounded-[333px] mt-[40px]">
            <img class="h-full w-full object-contain" src="{{ the_image_url($product->img,'thumbnail-210') }}" alt="">
        </div>
    </div>
</section>
{{-- Thank Section End  --}}
