{{-- Hero Section Start  --}}
<section class="lg:h-[594px] h-[325px] flex items-end  xl:px-0 md:px-10 px-5 relative">
    <div class="container mx-auto pb-[50px]" style="z-index: 10">
        <div class="xl:w-1/2 w-[80%]">
            <h2 class="text-white font-bold lg:text-[56px] md:text-[40px] text-[20px]">
                NOT THE AVERAGE CAR RENTAL COMPANY
            </h2>
            <p class="text-white text-base lg:block hidden">
                "At Golden Lease Rent a Car, we understand the importance of reliable transportation. We aim to build a
                trustworthy relationship with our customers, offering a wide range of rental vehicles to suit every
                customer's needs.
            </p>
            <a href="/products">
                <button class="bg-[#3A386F] rounded-full px-8 py-2 text-white mt-4">
                    Get Started
                </button>
            </a>
        </div>
    </div>
    <div class="new-overlay-right">
    </div>
    <img class="absolute top-0 left-0 h-full w-full object-cover" style="transform: scaleX(-1)"
        src="{{ asset('rentit/assets/img/updated/slide-img-1.jpg') }}" alt="">
</section>
{{-- Hero Section End  --}}

{{-- Counter Section Start  --}}
<section
    class="bg-cover bg-no-repeat bg-center py-4 new-bg-design 2xl:mt-[100px] mt-20 xl:px-0 md:px-10 px-5 md:block hidden">
    <div class="container mx-auto grid grid-cols-4">
        <div class="text-[#3A386F] p-[20px] text-center font-bold uppercase">
            <i class="fa fa-heart text-[60px]"></i>
            <div class="text-lg mt-4">
                {{ __('5657') }}
            </div>
            <h4 class="text-sm text-[#7f7f7f] mt-1">
                {{ __('Happy costumers') }}
            </h4>
        </div>
        <div class="text-[#3A386F] p-[20px] text-center font-bold uppercase">
            <i class="fa fa-car text-[60px]"></i>
            <div class="text-lg mt-4">
                {{ __('657') }}
            </div>
            <h4 class="text-sm text-[#7f7f7f] mt-1">
                {{ __('Total car count') }}
            </h4>
        </div>
        <div class="text-[#3A386F] p-[20px] text-center font-bold uppercase">
            <i class="fa fa-flag text-[60px]"></i>
            <div class="text-lg mt-4">
                {{ __('1.255.657') }}
            </div>
            <h4 class="text-sm text-[#7f7f7f] mt-1">
                Total KM/MIL
            </h4>
        </div>
        <div class="text-[#3A386F] p-[20px] text-center font-bold uppercase">
            <i class="fa fa-comments-o text-[60px]"></i>
            <div class="text-lg mt-4">
                {{ __('1255') }}
            </div>
            <h4 class="text-sm text-[#7f7f7f] mt-1">
                {{ __('Call Center Solutions') }}
            </h4>
        </div>
    </div>
</section>
{{-- Counter Section End  --}}

{{-- Offer Section Start  --}}
<section class="xl:py-[100px] py-[50px] xl:px-0 md:px-10 px-5 relative">
    <div class="container mx-auto">
        <div class="text-[#222222] text-center">
            <h6 class=" font-semibold md:text-[20px] text-[18px] uppercase">{{ __('Our Customized Offers') }}
            </h6>
            <h4 class="font-bold md:text-[56px] text-[18px]">{{ __('Choose your offer') }}</h4>
        </div>
        <div class="offerSlides overflow-hidden p-2 xl:mt-[100px] md:mt-10 mt-[30px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/our-deals" class="cursor-pointer">
                        <div class="lg:p-3 p-[6px] rounded-[10px] group bg-white hover:bg-[#3A386F] duration-300 text-[#222222]"
                            style="box-shadow: 4px 4px 10px 0px #00000020;">
                            <img class="w-full md:h-[226px] h-[115px] object-cover "
                                src="{{ asset('rentit/assets/img/updated/offer-img-1.jpg') }}" alt="" />
                            <div class="lg:p-10 p-5 text-center">
                                <h6 class="font-bold md:text-[24px] text-[12px] group-hover:text-[#FDCD76]">
                                    {{ __('Educational') }}</h6>
                                <p class="font-medium md:text-[18px] text-[10px] mt-4 group-hover:text-white">
                                    {{ __('Join our
                                    satisfied customers
                                    who
                                    trust us for their journeys. We serve with a lot of values that you can feel directly.') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/our-deals" class="cursor-pointer">
                        <div class="lg:p-3 p-[6px] rounded-[10px] group bg-white hover:bg-[#3A386F] duration-300 text-[#222222]"
                            style="box-shadow: 4px 4px 10px 0px #00000020;">
                            <img class="w-full md:h-[226px] h-[115px] object-cover "
                                src="{{ asset('rentit/assets/img/updated/offer-img-2.jpg') }}" alt="" />
                            <div class="lg:p-10 p-5 text-center">
                                <h6 class="font-bold md:text-[24px] text-[12px] group-hover:text-[#FDCD76]">
                                    {{ __('Corporate') }}</h6>
                                <p class="font-medium md:text-[18px] text-[10px] mt-4 group-hover:text-white">
                                    {{ __('Join our
                                    satisfied customers
                                    who
                                    trust us for their journeys. We serve with a lot of values that you can feel directly.') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/our-deals" class="cursor-pointer">
                        <div class="lg:p-3 p-[6px] rounded-[10px] group bg-white hover:bg-[#3A386F] duration-300 text-[#222222]"
                            style="box-shadow: 4px 4px 10px 0px #00000020;">
                            <img class="w-full md:h-[226px] h-[115px] object-cover "
                                src="{{ asset('rentit/assets/img/updated/offer-img-3.jpg') }}" alt="" />
                            <div class="lg:p-10 p-5 text-center">
                                <h6 class="font-bold md:text-[24px] text-[12px] group-hover:text-[#FDCD76]">
                                    {{ __('Fazza') }}</h6>
                                <p class="font-medium md:text-[18px] text-[10px] mt-4 group-hover:text-white">
                                    {{ __('Join our
                                    satisfied customers
                                    who
                                    trust us for their journeys. We serve with a lot of values that you can feel directly.') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img class="vector-right" src="{{ asset('rentit/assets/img/updated/vector-2.png') }}" alt="">
</section>
{{-- Offer Section End  --}}

{{-- Rental Offer Section Start  --}}
@if ($terms)
    <section class="xl:pb-[100px] pb-[52px] xl:px-0 md:px-10 px-0 relative">
        <div class="container mx-auto xl:px-[120px] px-0">
            <div class="text-[#222222] text-center">
                <h6 class="font-semibold md:text-[20px] uppercase text-[18px]">
                    {{ __('What kind of car you want') }}</h6>
                <h4 class="font-bold md:text-[56px] text-[20px]">{{ __('Rental Offers For you') }}</h4>
            </div>
            <div class="rentOfferSlides overflow-hidden p-2 xl:mt-[100px] md:mt-10 mt-[30px]">
                <div class="swiper-wrapper">
                    @foreach ($terms as $item)
                        @if ($item->products)
                            @foreach ($item->products as $product)
                                <div class="swiper-slide cursor-pointer">
                                    <div class="p-3 rounded-[10px] group bg-[#22222208] hover:bg-[#3A386F] duration-300 text-[#222222]"
                                        style="box-shadow: 4px 4px 10px 0px #00000020;">
                                        <div class="md:h-[204px] h-[180px] w-full bg-white">
                                            <a href="{{ route('products.show', ['products' => $product->alias]) }}">
                                                @if (isset($product->img) && $product->img > 0)
                                                    <img class="w-full h-full object-contain"
                                                        src="{{ the_image_url($product->img, 'thumbnail-370x220') }}"
                                                        alt="" />
                                                @endif
                                            </a>
                                        </div>
                                        <div class="py-5">
                                            <h6
                                                class="font-bold md:text-[24px] text-[20px] group-hover:text-white h-[44px] xl:h-auto">
                                                {{ $product->title }}</h6>
                                            <div
                                                class="mt-4 flex md:flex-row flex-col md:items-end items-start gap-2 md:gap-1 justify-between">
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-[#9a9a9a] md:text-[16px] text-[14px] font-semibold">{{ __('Starting at') }}</span>
                                                    <span
                                                        class="font-bold md:text-[24px] text-[20px] group-hover:text-white text-nowrap">{{ formatted_price($product->price) }} {{ __('/day') }}</span>
                                                </div>
                                                <a href="{{ route('products.show', ['products' => $product->alias]) }}"
                                                    class="bg-[#3A386F] rounded-full px-5 py-2 text-white font-bold group-hover:text-[#3A386F] group-hover:bg-white md:text-[16px] text-[14px]">{{ get_theme_mod('rentit_rent', __('Rent')) }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div class="w-full flex justify-center">
                    <div>
                        <div class="swiper-pagination-rentoffers mt-[30px] sm:mt-[50px] md:mt-[80px] lg:mt-[100px] text-center ml-[240px]"></div>
                    </div>
                </div>
            </div>
        </div>
        <img class="vector-left" src="{{ asset('rentit/assets/img/updated/vector-1.png') }}" alt="">
    </section>
@endif
{{-- Rental Offer Section End  --}}

{{-- Google Review Section Start --}}
<section class="xl:pb-[100px] pb-[52px] xl:px-0 md:px-10 px-5 lg:block hidden">
    <div class="container mx-auto flex justify-center">
        <div class="xl:w-[80%] w-full grid grid-cols-2 gap-20">
            <div class="flex justify-end">
                <img src="{{ asset('rentit/assets/img/updated/main-logo.png') }}" alt="" />
            </div>
            <div class="flex items-center gap-4" style="font-family: sans-serif">
                <img src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862815/Golden%20lease/google-icon_ax5cgr.svg"
                    alt="" />
                <div>
                    <h6 class="text-[#6A6A6A] font-bold text-[22px]">Google Rating</h6>
                    <div class="flex items-center gap-[22px]">
                        <span class="text-[#FEA500] font-[800] text-[32px]">5.0</span>
                        <div class="flex items-center">
                            <img
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862819/Golden%20lease/star_rwxq4z.svg" />
                            <img
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862819/Golden%20lease/star_rwxq4z.svg" />
                            <img
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862819/Golden%20lease/star_rwxq4z.svg" />
                            <img
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862819/Golden%20lease/star_rwxq4z.svg" />
                            <img
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862819/Golden%20lease/star_rwxq4z.svg" />
                        </div>
                    </div>
                    <a href="#" class="text-[#868686]">See all our reviews</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Google Review Section End --}}

{{-- Review  Section Start  --}}
<section class="xl:pb-[100px] pb-20 xl:px-0 md:px-10 px-0">
    <div class="container mx-auto xl:px-[120px] px-0">
        <div class="reviewSlides overflow-hidden p-[10px]  md:mt-0 mt-[30px] relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide cursor-pointer">
                    <div
                        class="swiper-content rounded-[10px] border border-[#e8e8e8] flex flex-col items-center justify-between text-center md:p-5 p-4 text-[#3A386F]">
                        <div class="flex flex-col items-center">
                            <img class="object-cover w-16 h-16 rounded-full"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1697112952/cld-sample.jpg"
                                alt="">
                            <h4 class="font-bold mt-2">{{ __('Ana ') }}</h4>
                            <span class="text-sm text-[c8c8c8]">15/03/2022</span>
                            <img class="py-2" src="{{ asset('rentit/assets/img/updated/review-star-img.png') }}"
                                alt="" />
                            <p class="font-semibold text-sm">
                                {{ __('I have rented cars from several different companies in the past, but this rent-a-car company stands out as the best. The staff is always friendly and helpful, and the process of booking and picking up my rental is always seamless. The cars are always clean and in excellent condition. I highly recommend this company to anyone in need of a rental car.') }}
                            </p>
                        </div>
                        <div>
                            <img class="object-cover w-16 h-16 rounded-full mt-2"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862815/Golden%20lease/google-icon_ax5cgr.svg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide cursor-pointer">
                    <div
                        class="swiper-content rounded-[10px] border border-[#e8e8e8] flex flex-col items-center justify-between text-center md:p-5 p-4 text-[#3A386F]">
                        <div class="flex flex-col items-center">
                            <img class="object-cover w-16 h-16 rounded-full"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715863488/pexels-thomas-richard-945930195-20094341_avftbx.jpg"
                                alt="">
                            <h4 class="font-bold mt-2">{{ __('Ahmed') }}</h4>
                            <span class="text-sm text-[c8c8c8]">12/04/2023</span>
                            <img class="py-2" src="{{ asset('rentit/assets/img/updated/review-star-img.png') }}"
                                alt="" />
                            <p class="font-semibold text-sm">
                                {{ __('I have been a loyal customer of this rent-a-car company for years, and I am always blown away by the level of professionalism and kindness shown by the staff. The cars are always clean and well-maintained, and the process of booking and picking up my rental is always seamless. I highly recommend this company to anyone in need of a rental car.') }}
                            </p>
                        </div>
                        <div>

                            <img class="object-cover w-16 h-16 rounded-full mt-2"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862815/Golden%20lease/google-icon_ax5cgr.svg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide cursor-pointer">
                    <div
                        class="swiper-content rounded-[10px] border border-[#e8e8e8] flex flex-col items-center justify-between text-center md:p-5 p-4 text-[#3A386F]">
                        <div class="flex flex-col items-center">
                            <img class="object-cover w-16 h-16 rounded-full"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715863488/pexels-pixabay-415829_jk4s4m.jpg"
                                alt="">
                            <h4 class="font-bold mt-2">{{ __('Ashiq') }}</h4>
                            <span class="text-sm text-[c8c8c8]">15/03/2022</span>
                            <img class="py-2" src="{{ asset('rentit/assets/img/updated/review-star-img.png') }}"
                                alt="" />
                            <p class="font-semibold text-sm">
                                {{ __('I have rented cars from several different companies in the past, but this rent-a-car company has consistently exceeded my expectations. The staff is always friendly and helpful, and the cars are always in excellent condition. I highly recommend this company to anyone in need of a rental car.') }}
                            </p>
                        </div>
                        <div>
                            <img class="object-cover w-16 h-16 rounded-full mt-2"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862815/Golden%20lease/google-icon_ax5cgr.svg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide cursor-pointer">
                    <div
                        class="swiper-content rounded-[10px] border border-[#e8e8e8] flex flex-col items-center justify-between text-center md:p-5 p-4 text-[#3A386F]">
                        <div class="flex flex-col items-center">
                            <img class="object-cover w-16 h-16 rounded-full"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715863488/pexels-bertellifotografia-3764119_d69yqd.jpg"
                                alt="">
                            <h4 class="font-bold mt-2">{{ __('John') }}</h4>
                            <span class="text-sm text-[c8c8c8]">15/02/2021</span>
                            <img class="py-2" src="{{ asset('rentit/assets/img/updated/review-star-img.png') }}"
                                alt="" />
                            <p class="font-semibold text-sm">
                                {{ __('I recently had the pleasure of renting a car from this company for a business trip, and I was thoroughly impressed with the level of service I received. The staff was knowledgeable and accommodating, and the car was clean and well-maintained. I will definitely be using this company for all of my future car rental needs.') }}
                            </p>
                        </div>
                        <div>
                            <img class="object-cover w-16 h-16 rounded-full mt-2"
                                src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862815/Golden%20lease/google-icon_ax5cgr.svg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev-review">
                <i class='bx bx-chevron-left' style="font-size: 30px"></i>
            </div>
            <div class="swiper-button-next-review">
                <i class='bx bx-chevron-right' style="font-size: 30px"></i>
            </div>
        </div>
    </div>
</section>
{{-- Review  Section End --}}

{{-- Partners Section Start  --}}
<section class="xl:pb-[100px] pb-20 xl:px-0 md:px-10 px-5 relative">
    <div class="container mx-auto">
        <div class="text-[#222222] text-center">
            <h6 class=" font-semibold text-[24px]">{{ __('Official Partners with') }}</h6>
        </div>
        <div class=" grid lg:grid-cols-6 grid-cols-2 gap-2  items-center xl:mt-[100px] md:mt-10 mt-[30px]">
            <div class="lg:shadow-md shadow-none bg-white">
                <img class="h-[100px] w-full object-contain"
                    src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862814/Golden%20lease/partner-logo-4_pezo7v.png"
                    alt="">
            </div>
            <div class="lg:shadow-md shadow-none bg-white">
                <img class="h-[100px] w-full object-contain"
                    src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862820/Golden%20lease/partner-logo-1_sdegb5.png"
                    alt="">
            </div>
            <div class="lg:shadow-md shadow-none bg-white">
                <img class="h-[100px] w-full object-contain"
                    src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862815/Golden%20lease/partner-logo-5_arjvim.png"
                    alt="">
            </div>
            <div class="lg:shadow-md shadow-none bg-white">
                <img class="h-[100px] w-full object-contain"
                    src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862821/Golden%20lease/partner-logo-2_z5h7cd.png"
                    alt="">
            </div>
            <div class="lg:shadow-md shadow-none bg-white">
                <img class="h-[100px] w-full object-contain"
                    src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862814/Golden%20lease/partner-logo-3_we4bta.png"
                    alt="">
            </div>
            <div class="lg:shadow-md shadow-none bg-white">
                <img class="h-[100px] w-full object-contain"
                    src="https://res.cloudinary.com/ddml5ylnh/image/upload/v1715862816/Golden%20lease/partner-logo-6_q1kwxn.png"
                    alt="">
            </div>
        </div>
    </div>
    <img class="vector-right" src="{{ asset('rentit/assets/img/updated/vector-2.png') }}" alt="">
</section>
{{-- Partners Section End  --}}

{{-- FAQs Section Start  --}}
<section id="faqs-section" class=" xl:px-0 md:px-10 px-5 lg:pb-0 pb-[52px]">
    <div class="container mx-auto">
        <div class="text-[#222222] text-center">
            <h6 class=" font-semibold md:text-[20px] text-[18px] uppercase">
                {{ __('What kind of car you want') }}</h6>
            <h4 class="font-bold md:text-[56px] text-[18px]">{{ __('FAQS') }}</h4>
        </div>
        <div class="xl:mt-[80px] md:mt-10 mt-[30px]">
            <div class="2xl:mt-5 mt-4">
                <div class="tab-content" data-tab="1">
                    <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-[40px] gap-3">
                        <ul id="accordion">
                            <div class="flex flex-col gap-3 w-full">
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black absolute color-h1 right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian faqs-accordian">
                                                <h1 class="color-h1">What's the Total Cost of the Rental?</h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ 'Each car has its special rates depending on type, model, features, and the duration (Daily, weekly, Monthly), in addition customers must pay one-time refundable deposit.' }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('Does the Car Have to be Returned with a Full Tank of Gas?') }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('We asked our customers to return the car with the same tank as when they picked it up!') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('If I’m a UAE resident, can I drive with my home country license?') }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('No, when you are a UAE resident, you must have a valid UAE driving license.') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('How can I pay for my rental car?') }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('The customer can pay in multiple ways: Cash, debit card, credit card, payment link, and bank transfer.') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('How many working days does it take to get the deposit back?') }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('Our team will strictly ensure that our customers get the deposit within 21 days by bank transfer.') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </ul>
                        <ul id="accordion-1" class="accordion-item lg:flex hidden">
                            <div class="flex flex-col gap-3 w-full">
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('What Happens if the Car is in an Accident?') }}</h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('Please don’t panic; you must immediately call 999 to report the accident & after that, you can contact us to advise you about the next steps.
                                                                                                                                                                                                                                                        Please note that all our cars are covered by insurance; please don’t listen to anyone telling you not to report the accident to the police.') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('How can I upgrade to full protection insurance?') }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('We offer same insurance for all customers, damages responsibilities divided into two cases as below:
                                                                                                                                                                                                                                                            1. If the Accident is your fault or unknown damage, you must pay 1500/- DHS for the accident excess charge and police report (1,050 for insurance claim + 450 police report).
                                                                                                                                                                                                                                                            2. If the Accident is not your fault, you don’t have to pay anything.') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn  cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('Is there a Daily Mileage Limit?') }}</h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('Our daily mileage limit is 150 km per day! Any special millage should be confirmed & approved by our management! Don’t hesitate to ask for!') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('Is having a valid UAE driving license acceptable, but my Emirates ID is expired?') }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('Each document should be valid at least one month in advance to approve your documents.') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                                <div>
                                    <li class="2xl:p-5 p-4 color-li rounded-lg border bg-[#F8F8F8]">
                                        <div class="accordion-btn cursor-pointer relative">
                                            <div
                                                class=" flex justify-center items-center text-black color-h1 absolute right-0 top-0 z-10">
                                                <i class='bx bx-chevron-down text-2xl'></i>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-center gap-4 relative faqs-accordian">
                                                <h1 class="color-h1">
                                                    {{ __('How can I ensure that Goldenlease Rent a Car is a valid registered company in UAE?') }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="accordion-content mt-4 hidden  border-[#ECECEC]">
                                            <h1 class="color-h1">
                                                {{ __('Our company stamp should stamp each Contract; Stamp contains our legal company name and license number.') }}
                                            </h1>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="lg:hidden flex justify-center text-white mt-[18px]">
                        <a class="bg-[#3A386F] rounded-full text-[14px] font-bold px-[22px] py-2 load-more-btn">
                            {{ __('Load More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- FAQs Section End  --}}
<script>
    window.addEventListener('scroll', function() {
        headerBackgroundColor();
    });

    function headerBackgroundColor() {
        var header = document.getElementById('main-header');
        var scrollPosition = window.scrollY;
        var menuItems = document.querySelectorAll('.header-nav-menu li');
        var hamburgerLines = document.querySelectorAll('.hamburger-menu-icon div');

        if (scrollPosition > 50) {
            header.style.backgroundColor = '#fff';
            menuItems.forEach((item) => {
                item.classList.remove('text-white');
            })
            hamburgerLines.forEach((line) => {
                line.classList.add('bg-black');
            })
        } else {
            header.style.backgroundColor = 'transparent';
            menuItems.forEach((item) => {
                item.classList.add('text-white');
            })
            hamburgerLines.forEach((line) => {
                line.classList.remove('bg-black');
                line.classList.add('bg-white');
            })
        }
    }
</script>
