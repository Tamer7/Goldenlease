// Hamburger Icon 
document.addEventListener('DOMContentLoaded', function () {
    var iconElement = document.querySelector('.hamburger-menu-icon');
    var line1 = document.querySelector('#hamburger-line1');
    var line2 = document.querySelector('#hamburger-line2');
    var line3 = document.querySelector('#hamburger-line3');
    var mobileSidebar = document.querySelector('.mobile-menu-sidebar');

    iconElement.addEventListener('click', function () {
        iconElement.classList.toggle('cross');
        mobileSidebar.classList.toggle('show-sidebar');
    });
});
// // Header Color on scroll 
//     if (scrollPosition > 30) {
//         header.style.backgroundColor = '#fff';
//         menuItems.forEach((item) => {
//             item.classList.remove('text-white');
//         })
//     } else {
//         header.style.backgroundColor = 'transparent';
//         menuItems.forEach((item) => {
//             item.classList.add('text-white');
//         })
//     }

// Scroll to top 
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
        scrollToTopBtn.style.display = "flex";
    } else {
        scrollToTopBtn.style.display = "none";
    }
});

scrollToTopBtn.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

//   Accrodion FUnction 
$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;
        var links = this.el.find('.accordion-btn');
        links.on('click', {
            el: this.el,
            multiple: this.multiple
        }, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');
        $this.parent().toggleClass('active'); // Toggle active class on parent li

        $this.find('i').toggleClass('bx-chevron-down bx-chevron-up');

        // Toggle background color and text color
        if ($this.parent().hasClass('active')) {
            $this.closest('.color-li').css('background-color', '#3A386F');
            $this.closest('.color-li').find('.color-h1').css('color', 'white');
        } else {
            $this.closest('.color-li').css('background-color', '#F8F8F8');
            $this.closest('.color-li').find('.color-h1').css('color', 'black');
        }

        if (!e.data.multiple) {
            $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open').removeClass('active').find('i').removeClass('bx-chevron-up').addClass('bx-chevron-down');
            $el.find('.color-li').not($this.closest('.color-li')).css('background-color', '#F8F8F8');
            $el.find('.color-li').not($this.closest('.color-li')).find('.color-h1').css('color', 'black');
        };
    }

    var accordion1 = new Accordion($('#accordion'), false);
    var accordion2 = new Accordion($('#accordion-1'), false);
    // Add more accordions as needed
});


// Load More Faqs 
document.addEventListener("DOMContentLoaded", function () {
    const loadMoreButton = document.querySelector('.load-more-btn');
    const hiddenAccordionItems = document.querySelectorAll('.accordion-item');
    loadMoreButton.addEventListener('click', function () {
        hiddenAccordionItems.forEach(item => {
            item.classList.remove('hidden');
        });
        loadMoreButton.style.display = 'none';
    });
});

function scrollToFaqs() {
    var faqsSection = document.getElementById('faqs-section');
    faqsSection.scrollIntoView({ behavior: 'smooth' })
}




