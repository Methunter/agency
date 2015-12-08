

jQuery(document).ready(function  ($) {

// $('#myModal').reveal({ пали: отключил, что бы не смущала  foundation.reveal.js
//      animation: 'fadeAndPop',                   //fade, fadeAndPop, none
//      animationspeed: 300,                       //how fast animtions are
//      closeonbackgroundclick: true,              //if you click background will modal close?
//      dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
// });
// $(".menunavitem").matter("enlight");
// $("div").matter("update",""); TODO: uncomment matter.update & enlight&
	
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
$(document).foundation();
	// 	document.write('<script src=js/vendor/' +
	// 		('__proto__' in {} ? 'zepto' : 'jquery') +
	// 		'.js><\/script>');
		// todo: get back to it later, after modal problem would be took care of.
// НАдо: До лучших времён, пока не разберусь с модалом.

 		$('#age').html("");
 	var get_current_age = function(date) {
 		return new Date().getFullYear() - date;
 	};
 $('#age').text("254")

 ;
 // });

    var parts = document.URL.split("/");
    // [http:, empty, your domain, firstfolder]
    var firstFolder = parts[3];
     $(".menunav").parent().attr("class", "noactive");
    $(".menunav a[href='/" + firstFolder + "/']").attr("class", "active");
})










