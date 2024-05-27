<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $description ?? '' }}" />
    <meta name="keywords" content="{{ $keywords ?? '' }}" />
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"> --}}
    <title>Home | Goldenlease Car Rental Dubai</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset(config('settings.theme')) }}/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="{{ asset(config('settings.theme')) }}/assets/ico/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/07b6797bbe.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    {{-- Tailwind CSS CDN  --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Additional CSS File  --}}
    <link rel="stylesheet" href="{{ asset('rentit/assets/css/updated/updated-min.css') }}">
    {{-- JQuery CDN  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Selector CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <!-- Admin Bar CSS -->
    <link href="{{'cubic/css/admin-bar.css'}}" rel="stylesheet">
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select the icon element after the document has loaded
            var iconElement = document.querySelector('.menu-icon');
            var nav_menu = document.querySelector('.nav');
            var line1 = document.querySelector('#line1');
            var line2 = document.querySelector('#line2');
            var line3 = document.querySelector('#line3');

            console.log(iconElement);

            // Add a click event listener to the icon
            iconElement.addEventListener('click', function() {
                // Toggle the 'clicked' class on click\
                nav_menu.classList.toggle('m_active');
                iconElement.classList.toggle('cross');
                iconElement.classList.toggle('hamburger');
            });
        });
    </script> --}}
    <style>
        body {
            font-family: "Syne", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .new-slider-about {
            background-image: url("{{ asset('rentit/assets/img/updated/about.png') }}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .new-slider-contact{
            background-image: url("{{ asset('rentit/assets/img/updated/contact.jpg') }}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .new-bg-design {
            background-image: url("{{ asset('rentit/assets/img/updated/bg-design-1.png') }}");
        }
    </style>
</head>

<body id="home" class="wide @if (isAdminBarVisible()) adminbar @endif" @if(request()->is('/')) onscroll="headerBackgroundColor()" @endif>
    {{-- Main Header  --}}
    <header 
        class="py-2 xl:px-0 md:px-10 px-5 fixed w-full z-50 @if(!request()->is('/')) bg-white @endif" id="main-header"
        >
        <nav class="mx-auto container flex items-center justify-between">
            <a href="/">
                <img src="<?php echo the_image_url(get_theme_mod('header_logo')); ?>" alt="" class="md:w-[223px] w-[159px]" />
            </a>
            <ul class="text-[18px] header-nav-menu item-center gap-20 lg:flex hidden font-semibold">
                <li class="@if(request()->is('/')) text-white @endif hover:text-[#3A386F]  cursor-pointer {{request()->is('products') ? 'nav-item-active' : ''}}"><a href="/products">Fleet</a></li>
                <li class="@if(request()->is('/')) text-white @endif hover:text-[#3A386F]  cursor-pointer {{request()->is('about-us') ? 'nav-item-active' : ''}}"><a href="/about-us">About</a></li>
                <li class="@if(request()->is('/')) text-white @endif hover:text-[#3A386F]  cursor-pointer {{request()->is('our-deals') ? 'nav-item-active' : ''}}"><a href="/our-deals">Deals</a></li>
                <li class="@if(request()->is('/')) text-white @endif hover:text-[#3A386F]  cursor-pointer {{request()->is('business-partners') ? 'nav-item-active' : ''}}"><a href="/business-partners">Partners</a></li>
                <li class="@if(request()->is('/')) text-white @endif hover:text-[#3A386F]  cursor-pointer {{request()->is('posts') ? 'nav-item-active' : ''}}"><a href="/posts">Blog</a></li>
            </ul>
            <button class="bg-[#3A386F] rounded-full px-8 py-2 text-white lg:flex hidden text-[18px] font-semibold">
                <a href="/contact-us">
                    Contact
                </a>
            </button>
            <div class="hamburger-menu-icon block lg:hidden">
                <div id="hamburger-line1" class="@if(request()->is('/')) bg-white @else bg-black @endif"></div>
                <div id="hamburger-line2" class="@if(request()->is('/')) bg-white @else bg-black @endif"></div>
                <div id="hamburger-line3" class="@if(request()->is('/')) bg-white @else bg-black @endif"></div>
            </div>
        </nav>
        <div class="mobile-menu-sidebar block lg:hidden p-5 h-[50%]">
            <!-- Example Content -->
            <ul class="text-base item-center gap-4 flex flex-col">
                <li class="text-white font-bold cursor-pointer"><a href="/products">Fleet</a></li>
                <li class="text-white font-bold cursor-pointer"><a href="/about-us">About</a></li>
                <li class="text-white font-bold cursor-pointer"><a href="/our-deals">Deals</a></li>
                <li class="text-white font-bold cursor-pointer"><a href="/business-partners">Partners</a></li>
                <li class="text-white font-bold cursor-pointer"><a href="/posts">Blog</a></li>
                <li class="text-white font-bold cursor-pointer"><a href="/contact-us">Contact</a></li>
            </ul>
        </div>
    </header>

    {{-- Whatsapp Button --}}
    <a href="#" class="whatsapp-btn right-0">
        <div class="bg-[#26D367] md:px-5 px-3 md:pt-4 pt-3 md:pb-[14px] pb-8  flex items-center justify-center"><i class='bx bxl-whatsapp md:text-[20px] text-base text-white'></i>
        </div>
        <div class="text-white md:text-[18px] text-base font-medium md:px-5 px-3 md:pt-4 pt-3 md:pb-[14px] pb-8 bg-[#222222] flex items-center justify-center">
            Contact
        </div>
    </a>
    {{-- Scorll To Top Button  --}}
    <a id="scrollToTopBtn" class="scroll-to-top-btn md:flex hidden">
        <i class='bx bx-up-arrow-alt text-[24px] text-white'></i>
    </a>
</body>
