window.onload = function() {

	var scrollHome = document.getElementById("home");
	scrollHome.addEventListener("click",scrollAutomatico);

	var scrollUs = document.getElementById("us");
	scrollUs.addEventListener("click",scrollAutomatico1);

	var scrollContact = document.getElementById("contact");
	scrollContact.addEventListener("click",scrollAutomatico2);

	function scrollAutomatico(seccion) {
		console.log("seccion");
		window.scrollTo(0,10);
	}

	function scrollAutomatico1(seccion) {
		console.log("seccion");
		window.scrollTo(0,10);
	}

	function scrollAutomatico2(seccion) {
		console.log("seccion");
		window.scrollTo(0,10);
	}
};