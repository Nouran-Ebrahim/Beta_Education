(function ($) {
	"use strict";
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
  
		if (scroll != 0) {
		  $("header").addClass("background-header");
		} else {
		  $("header").removeClass("background-header");
		}
	})

})(window.jQuery);
document.getElementById('thanwy').addEventListener('click',()=>{
	document.getElementById('thawy-content').style.display="block";
    document.getElementById('thawy-content').style.cssText='display: flex; flex-direction: row; justify-content: space-around;width: 100%;'
	document.getElementById('prep-content').style.display="none";

document.getElementById('thanwy').style.cssText="color:#f5a425"
document.getElementById('prep').style.cssText="color:white"

	
console.log("clicked")

})

document.getElementById('prep').addEventListener('click',()=>{
	document.getElementById('prep-content').style.display="block";
    document.getElementById('prep-content').style.cssText='display: flex; flex-direction: row; justify-content: space-around;width: 100%;'

	document.getElementById('thawy-content').style.display="none";
	document.getElementById('prep').style.cssText="color:#f5a425"
	document.getElementById('thanwy').style.cssText="color:white"
console.log("clicked-prep")
})
console.log("no")
// var navItems = document.querySelectorAll(".nav-item");
// console.log("fbhjvb")
// for (var i = 0; i < navItems.length; i++) {
//    navItems[i].addEventListener("click", ()=>{
// 	// var that = this.style.color="red";
// 	console.log(navItems[i])

//    });
// }

// var navItems = document.querySelectorAll(".scroll-to-section");
// for (var i = 0; i < navItems.length; i++) {
//    navItems[i].addEventListener("click", function() {
// 	  this.classList.add("active");
//    });
// }

