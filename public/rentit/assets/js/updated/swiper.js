const offerSwiper = new Swiper(".offerSlides", {
    loop: true,
    pagination: {
        el: ".swiper-pagination-best",
        type: "fraction",
    },
    autoplay: {
        delay: 5000,
    },
    speed: 600,
    breakpoints: {
        320: {
            slidesPerView: 1,
            centeredSlides: false,
            autoplay:true,
            spaceBetween: 12,
        },
        420: {
            slidesPerView: 2,
            centeredSlides: true,
            autoplay:true,
            spaceBetween: 14,
        },
        768: {
            slidesPerView: 3,
            centeredSlides: false,
            autoplay:false,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            centeredSlides: false,
            autoplay:false,
            spaceBetween: 20,
        },
        1280: {
            slidesPerView: 3,
            centeredSlides: false,
            autoplay:false,
            spaceBetween: 30,
        },
    },

});

// var startBullets = 0;
// var endBullets = 4;
const rentSwiper = new Swiper(".rentOfferSlides", {
    loop: true,
    pagination: {
        el: '.swiper-pagination-rentoffers',
        clickable: true,
        dynamicBullets: true,
        loop: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    speed: 600,
    breakpoints: {
        320: {
            slidesPerView: 1,
            centeredSlides: false,
            spaceBetween: 12,
        },
        420: {
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 14,
        },
        768: {
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            autoplay:false,
            spaceBetween: 20,
        },
        1440: {
            slidesPerView: 3,
            autoplay:false,
            spaceBetween: 64,

        },
    },

});

// rentSwiper.on('slideChange', function () {
//     const activeIndex = this.realIndex + 1;
//     // console.log(`Active Index: ${activeIndex}`);
//     if (activeIndex % 5 === 0) {
//         startBullets = activeIndex;
//         endBullets = activeIndex + 4;
//         rentSwiper.pagination.render();
//         rentSwiper.pagination.update();
//     } 
//     else {
//         console.log(`Slide ${activeIndex} is active`);
//     }
// });

const reviewSwiper = new Swiper(".reviewSlides", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next-review",
        prevEl: ".swiper-button-prev-review",
    },
    autoplay: {
        delay: 5000,
    },
    speed: 600,
    breakpoints: {
        320: {
            slidesPerView: 1,
            centeredSlides: false,
            spaceBetween: 8,
        },
        420: {
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 8,
        },
        768: {
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 8,
        },
        1024: {
            slidesPerView: 3,
            autoplay: false,
            spaceBetween: 12,
        },
        1440: {
            slidesPerView: 3,
            autoplay: false,
            spaceBetween: 12,
        },
    },
});


const relevantSwiper = new Swiper(".relevantSlides", {
    // loop: true,
    navigation: {
        nextEl: ".swiper-button-next-best",
        prevEl: ".swiper-button-prev-best",
    },
    autoplay: {
        delay: 5000,
    },
    speed: 600,
    breakpoints: {
        320: {
            slidesPerView: 1,
            centeredSlides: false,
            spaceBetween: 14,
        },
        420: {
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 14,
        },
        768: {
            slidesPerView: 4,
            centeredSlides: false,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 4,
            autoplay: false,
            spaceBetween: 35,
        },
        1280: {
            slidesPerView: 5,
            autoplay: false,
            spaceBetween: 35,
        },
    },
});

