<footer class="lg:pt-[300px] pt-0">
    <div class="bg-[#f8f8f8] lg:pt-[100px] pt-[30px] lg:pb-[70px] pb-[30px] xl:px-0 md:px-10 px-5">
        <div
            class="container mx-auto relative lg:h-[350px] h-[175px] rounded-[30px] overflow-hidden bg-center lg:mt-[-300px] mt-0 flex lg:justify-end justify-start items-center lg:px-0 px-[35px]">
            <div class="lg:w-[418px] w-[208px]" style="z-index: 10">
                <h4 class="lg:text-[56px] text-[28px] text-white">Ready to Go?</h4>
                <p class="lg:text-[24px] text-[12px] text-white">Book your car wherever you are and ride with us now!</p>
            </div>
            <div class="new-overlay-left"></div>
            <img class="absolute top-0 left-0 h-full w-full object-cover"
                src="{{ asset('rentit/assets/img/updated/footer-img.png') }}" alt="">
        </div>
        <div class="container mx-auto lg:mt-[100px] mt-0 ">
            <div class="grid grid-cols-12 mt-10 text-[#222222]">
                <div class="lg:col-span-6 col-span-12">
                    <h1 class="font-bold lg:text-[56px] text-[20px]">Feel free to ask</h1>
                    <p class="text-[18px] font-medium">If you have any Questions, just send us message or Call us on</p>
                    <div class="md:py-0 md:px-0 py-3 px-5 mt-4 md:bg-transparent md:rounded-0 rounded-full  bg-[#26D367] flex items-center md:gap-0 gap-3 w-[190px]">
                        <i class='bx bxl-whatsapp text-[24px] text-white md:hidden block' ></i>
                        <h3 class=" font-bold md:text-[22px] text-[18px] md:text-[#707070] text-white underline">+038837662</h3>
                    </div>
                </div>
                <div class="lg:col-span-6 col-span-12 lg:mt-0 mt-5">
                    <div class="grid grid-cols-12">
                        <div class="col-span-4">
                            <h6 class="font-bold lg:text-[24px] text-[16px]">Quick Links</h6>
                            <ul class="flex flex-col gap-2 font-medium text-[18px] mt-4">
                                <li>
                                    <a href="/about-us">
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="/about-us">
                                        Who we are
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact-us">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-4">
                            <h6 class="font-bold lg:text-[24px] text-[16px]">The Cars</h6>
                            <ul class="flex flex-col gap-2 font-medium text-[18px] mt-4">
                                <li>
                                    <a href="/products">
                                        How it works
                                    </a>
                                </li>
                                <li>
                                    <a href="/products">
                                        Pick a car
                                    </a>
                                </li>
                                <li>
                                    <a href="/#faqs-section" onclick="scrollToFaqs()" class="cursor-pointer">
                                        FAQs
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-4">
                            <h6 class="font-bold lg:text-[24px] text-[16px]">Soical Media</h6>
                            <ul class="flex flex-col gap-2 font-medium text-[18px] mt-4">
                                <li>Facebook</li>
                                <li>Instagram</li>
                                <li>Twitter</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-16 font-medium text-sm">
                        <h1>Copyright © 2024 GoldenLease. All rights reserved.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- Additional JS File  --}}
<script src="{{ asset('rentit/assets/js/updated/swiper.js') }}"></script>
<script src="{{ asset('rentit/assets/js/updated/index.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
