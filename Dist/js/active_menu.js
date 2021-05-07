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
})();