document.querySelector(".burger").onclick = function() {
	this.classList.toggle("burger-active");
	document.querySelector("nav").classList.toggle("active");
}
