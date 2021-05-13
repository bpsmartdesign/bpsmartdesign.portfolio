(function() {

	var links = document.querySelectorAll('.menu ul li');

	if(/About_me/i.test(window.location.href)) {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('active');
		}
		links[1].classList.add('active');
	} else if(/Skills/i.test(window.location.href)) {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('active');
		}
		links[2].classList.add('active');

		document.querySelectorAll('.fill-value').forEach(fv => {
			let w = fv.getAttribute('data-value')
			fv.style.width = w + '%'
		})
	} else if(/Worked/i.test(window.location.href)) {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('active');
		}
		links[3].classList.add('active');
	} else if(/Contact/i.test(window.location.href)) {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('active');
		}
		links[4].classList.add('active');
	} else {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('active');
		}
		links[0].classList.add('active');
	}

	// mobile menu
	const line = document.querySelector('.lines');
	const close = document.querySelector('.close-mm');
	const mMenu = document.querySelector('.v-menu-container')
	let showMobileMenu = false

	function setMenu(e) {
		e.preventDefault()
		e.stopImmediatePropagation()
		e.stopPropagation()

		showMobileMenu = !showMobileMenu

		if (showMobileMenu) {
			mMenu.classList.add('show-mobile-menu', 'fade-in-down')
		} else {
			mMenu.classList.remove('fade-in-down')
			mMenu.classList.add('fade-out-down')
			setTimeout(() => {
				mMenu.classList.remove('show-mobile-menu')
				mMenu.classList.remove('fade-out-down')
			}, 450);
		}		
	}

	line.addEventListener('click', setMenu)
	close.addEventListener('click', setMenu)
})();