(function ($) {
	"use strict";

	$(document).ready(function () {
		// Search Popup
		var bodyOvrelay = $("#body-overlay");
		var searchPopup = $("#search-popup");

		$(document).on("click", "#body-overlay", function (e) {
			e.preventDefault();
			bodyOvrelay.removeClass("active");
			searchPopup.removeClass("active");
		});
		$(document).on("click", ".search--toggler", function (e) {
			e.preventDefault();
			searchPopup.addClass("active");
			bodyOvrelay.addClass("active");
		});
		// Search Popup End

		// Animate the scroll to top
		$(".back-to-top").on("click", function (event) {
			event.preventDefault();
			$("html, body").animate(
				{
					scrollTop: 0,
				},
				300
			);
		});
		// Animate the scroll to top End

		// Mobile Submenu
		let primaryMenu = $(".has-sub > .primary-menu__link");
		let primarySubMenu = $(".primary-menu__sub");
		if (primaryMenu || primarySubMenu) {
			primaryMenu.on("click", function (e) {
				e.preventDefault();
				if (parseInt(screenSize) < parseInt(992)) {
					$(this).toggleClass("active").siblings(primarySubMenu).slideToggle();
				}
			});
		}
		// Mobile Submenu End

		// Custom Dropdown
		let customDropdown = $('[data-set="custom-dropdown"]');
		let dropdownContent = $(".custom-dropdown__content");
		if (customDropdown || dropdownContent) {
			customDropdown.each(function () {
				$(this).on("click", function (e) {
					e.stopPropagation();
					$("body").toggleClass("custom-dropdown-open");
					dropdownContent.toggleClass("is-open");
				});
			});
			dropdownContent.each(function () {
				$(this).on("click", function (e) {
					e.stopPropagation();
				});
			});
			$(document).on("click", function () {
				$("body").removeClass("custom-dropdown-open");
				dropdownContent.removeClass("is-open");
			});
		}
		// Custom Dropdown End

		// Client Slider
		const clientSlider = $(".client-slider");
		if (clientSlider) {
			clientSlider.slick({
				mobileFirst: true,
				slidesToShow: 2,
				prevArrow:
					'<button type="button" class="client-slider__arrow client-slider__arrow-prev"><i class="las la-angle-left"></i></button>',
				nextArrow:
					'<button type="button" class="client-slider__arrow client-slider__arrow-next"><i class="las la-angle-right"></i></button>',
				responsive: [
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 3,
						},
					},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 4,
						},
					},
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 5,
						},
					},
					{
						breakpoint: 1399,
						settings: {
							slidesToShow: 6,
						},
					},
				],
			});
		}
		// Client Slider End

		// Testimonial Slider
		const testimonialSlider = $(".testimonial-slider");
		if (testimonialSlider) {
			testimonialSlider.slick({
				mobileFirst: true,
				slidesToShow: 1,
				prevArrow:
					'<button type="button" class="testimonial-slider__arrow testimonial-slider__arrow-prev"><i class="las la-angle-left"></i></button>',
				nextArrow:
					'<button type="button" class="testimonial-slider__arrow testimonial-slider__arrow-next"><i class="las la-angle-right"></i></button>',
				responsive: [
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 2,
						},
					},
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 3,
						},
					},
				],
			});
		}
		// Testimonial Slider End
		
		// user Dashboard Menu Toggle
		let userMenuToggle = $(".dashboard-sidebar__nav-toggle-btn");
		let userMenuClose = $(".dashboard-menu__head-close");
		if (userMenuToggle || userMenuClose) {
		  userMenuToggle.on("click", function () {
			$("body").toggleClass("dashboard-menu-open");
		  });
		  userMenuClose.on("click", function () {
			$("body").toggleClass("dashboard-menu-open");
		  });
		}
		// user Dashboard Menu Toggle End

		// Magnific Popup
		var magPhoto = $(".show-video");
		if (magPhoto.length) {
		  magPhoto.magnificPopup({
			disableOn: 700,
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false,
			disableOn: 300,
		  });
		}
		// Magnific Popup End
	});
})(jQuery);

// Header Fixed On Scroll
var bodySelector = document.querySelector("body");
const header = document.querySelector(".header-primary--fixed");

if (bodySelector.contains(header)) {
	const headerTop = header.offsetTop;

	function fixHeader() {
		if (window.scrollY >= headerTop) {
			document.body.classList.add("fixed-header");
		} else if (window.scrollY < headerTop) {
			document.body.classList.remove("fixed-header");
		} else {
			document.body.classList.remove("fixed-header");
		}
	}
	$(window).on("scroll", function () {
		fixHeader();
		if (window.scrollY == 0) {
			document.body.classList.remove("fixed-header");
		}
	});
}
// Header Fixed On Scroll End

$(window).on("scroll", function () {
	var ScrollTop = $(".back-to-top");
	if ($(window).scrollTop() > 1200) {
		ScrollTop.fadeIn(1000);
	} else {
		ScrollTop.fadeOut(1000);
	}
});

$(window).on("load", function () {
	// Preloader
	var preLoder = $(".preloader");
	preLoder.fadeOut(1000);
});

// Screen Size Counting
let screenSize = window.innerWidth;
window.addEventListener("resize", function (e) {
	screenSize = window.innerWidth;
});
// Screen Size Counting End

let elements = document.querySelectorAll('[s-break]');
Array.from(elements).forEach(element => {
	let html = element.innerHTML.trim();
	console.log(html);

	if (typeof html != 'string') {
		return false;
	}
	let breakLength = parseInt(element.getAttribute('s-break'));
	html = html.split(" ");

	colorText = [];

	if (breakLength < 0) {
		colorText = html.slice(breakLength);
	} else {
		colorText = html.slice(0, breakLength);
	}

	let solidText = [];
	html.filter(ele => {
		if (!colorText.includes(ele)) {
			solidText.push(ele);
		}
	});

	if (element.hasAttribute('data-img-src')) {
		colorText = `<span>${colorText.toString().replaceAll(',', ' ')} <img src="${element.getAttribute('data-img-src')}"></span>`;
	} else {
		colorText = `<span>${colorText.toString().replaceAll(',', ' ')}</span>`;
	}
	solidText = solidText.toString().replaceAll(',', ' ');

	breakLength < 0 ? element.innerHTML = `${solidText} ${colorText}` : element.innerHTML = `${colorText} ${solidText}`

})

