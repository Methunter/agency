<?php 
include("inc/header.php"); ?>                   <!-- beginning of content -->




<script src="/js/jquery.js"></script>
<script src="/js/foundation.js"></script>


<script>
	$(document).foundation();
</script>

<div class="bg-tagline">
	<h1 class="tagline">Awesome tagline here<br><a href="#" data-reveal-id="firstModal">t&c</a></h1>
</div>
<div id="firstModal" class="reveal-modal medium" data-reveal="">
	<p>TEST</p>
	<a class="close-reveal-modal">x</a>
</div>            





<?php

/**
 * @Author: m32sa
 * @Date:   2015-12-04 00:43:11
 * @Last Modified by:   m32sa
 * @Last Modified time: 2015-12-06 02:34:59
 */
// include 'inc/header.inc';
?>


<ul id="driver"></ul>
<ul id="stage"></ul>
<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$.getJSON( 'json/actress_olga_vinichenko.json',
			function( resp ) {
				$( '#stage' ).html( 'Results: ' + resp.olgaVinichenko.name + resp.olgaVinichenko.education.length);
			});
		$("#driver").click(function(event){
			$.getJSON('json/actress_olga_vinichenko.json', function(actor) {

				console.log(actor);
				$('ul#stage').append('<li> Имя: ' + actor.olgaVinichenko.name + '</li>');
				$('ul#stage').append('<li>Дата рождения : ' + actor.olgaVinichenko.B_date+ '</li>');
				$('ul#stage').append('<li> Место рождения: ' + actor.olgaVinichenko.B_place+ '</li>');

											while(actor.olgaVinichenko.education.length){
									$('ul#stage').append('<li> Образование: <ul>' + actor.olgaVinichenko.education[i]  +  '</li>/<ul></li>');
										console.log(actor.olgaVinichenko.education[i]); 
}
				$('ul#stage').append('<li> Работы в театре: ' + actor.olgaVinichenko.theatre_expirience+ '</li>');
			

			});
		});

				


				// $('div.top_menu li').each(function () {
				// 	if ($("a")[0].href == location.href) this.className = "current";});
				var test;
				var menu = $.getJSON("json/main_menu.json", function(resp){
					test = resp;
					return resp;});
				// menu = $.parseJSON(menu);
				// test.matter("desctibe");
				// for (var i = 0; i < menu.names.length; i++) {
				// 		$("ul#driver").append("<li>" + menu.names[i] +"</li>" );
				// 	};	
				// for (var i = 0; i <= menu.titles.length; i++) {
				// 		$("ul#driver").append("<li class='menu'><a href=" + menu.titles[i].link + ">" + i + " : " + menu.titles[i].title + "</li>" );
				// 	};
		});
		</script>
		<?php
		include_once("inc/footer.inc");
		?>

