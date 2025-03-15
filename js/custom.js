(function () {
	'use strict';

	var tinyslider = function () {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();




	var sitePlusMinus = function () {

		var value,
			quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
			var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
			var increase = quantityContainer.getElementsByClassName('increase')[0];
			var decrease = quantityContainer.getElementsByClassName('decrease')[0];
			increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
			decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
		}

		function init() {
			for (var i = 0; i < quantity.length; i++) {
				createBindings(quantity[i]);
			}
		};

		function increaseValue(event, quantityAmount) {
			value = parseInt(quantityAmount.value, 10);

			console.log(quantityAmount, quantityAmount.value);

			value = isNaN(value) ? 0 : value;
			value++;
			quantityAmount.value = value;
		}

		function decreaseValue(event, quantityAmount) {
			value = parseInt(quantityAmount.value, 10);

			value = isNaN(value) ? 0 : value;
			if (value > 0) value--;

			quantityAmount.value = value;
		}

		init();

	};
	sitePlusMinus();


})()

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function(e) {
		e.preventDefault();

		document.querySelector(this.getAttribute('href')).scrollIntoView({
			behavior: 'smooth'
		});
	});
});

document.addEventListener('click', function(event) {
	var navbar = document.getElementById('navbarsNestFurn');
	var navbarToggler = document.querySelector('.navbar-toggler');
	if (!navbar.contains(event.target) && !navbarToggler.contains(event.target)) {
		var bsCollapse = new bootstrap.Collapse(navbar, {
			toggle: false
		});
		bsCollapse.hide();
	}
});

window.addEventListener('scroll', function () {

	let scrollPosition = window.scrollY;

	let blurAmount = scrollPosition / 100; 

	document.querySelector('.custom-navbar').style.backdropFilter = `blur(${blurAmount}px)`;

});

function toggleSearchBar() {
	var searchBar = document.getElementById('search-bar');
	if (searchBar.style.display === 'none' || searchBar.style.display === '') {
		searchBar.style.display = 'block';
	} else {
		searchBar.style.display = 'none';
	}
}

document.addEventListener('click', function(event) {
	var searchBar = document.getElementById('search-bar');
	var searchToggleBtn = document.getElementById('search-toggle-btn');
	if (!searchBar.contains(event.target) && !searchToggleBtn.contains(event.target)) {
		searchBar.style.display = 'none';
	}
});


var modal = document.getElementById('id01');

window.onclick = function (event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

document.getElementById('plus').addEventListener('click', function() {
	var qty = document.getElementById('qty');
	var currentQty = parseInt(qty.textContent);
	qty.textContent = currentQty + 1;
});

document.getElementById('minus').addEventListener('click', function() {
	var qty = document.getElementById('qty');
	var currentQty = parseInt(qty.textContent);
	if (currentQty > 1) {
		qty.textContent = currentQty - 1;
	}
});

setTimeout(function () { 
	$('#alert').alert('close'); 
}, 5000); 
