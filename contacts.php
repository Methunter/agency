<?php 
include_once('inc/header.php');
?>
<?php



/*ol
	                    beginning of content
 * @Author: m32sa
 * @Date:   2015-12-04 00:43:11
 * @Last Modified by:   m32sa
 * @Last Modified time: 2015-12-06 02:34:59
 */
// include 'inc/header.php';
?>
<h1><div id="panel"></div></h1>
<ul class="actor"></ul>
<div class="actor" id="valeriaBudankova"><h1>budankova</h1></div>
<div class="actor" id="olgaVinichenko"><h1>olga</h1></div>
<!-- <ul id="driver"><li></li></ul> -->
<ul id="stage"></ul>
<!--  <script src="/js/matter.js"></script> -->
<p><a data-open="exampleModal1">Click me for a modal</a></p>

<div  class="reveal" id="exampleModal1" data-reveal>
  <h1>Awesome. I Have It.</h1>
  <p class="lead">Your couch. It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<script>
	$(document).ready(function() {

//   $( "nav" ).prepend( "<div class='label warning'><h2 id='width'></h2></div>" );
// 		$( window ).resize(function() {

// 			$('#width').text($( window ).width()/16 + "em" );
// });
		var test = function(string){
	console.log(string);
}
var list_exp = function( actor , name , key  ){
	// console.log("act.lrn: " + actor.name.order_number);
		var result =  "<ul>";

// 		for (var i = actor.olgaVinichenko.theatre_expirience.length - 1; i >= 0; i--) {
		for (var i = actor.name.theatre_expirience.length - 1; i >= 0; i--) {
			result += "<li id=" + key + "> " + actor.olgaVinichenko.theatre_expirience[i]  +  "</li>";
		}
		result += "</ul>";
	return result;
}
var list_educ = function( actor , name , key ){
		var result =  "<ul>";

		for (var i = actor.olgaVinichenko.education.length - 1; i >= 0; i--) {
			result += "<li id=" + key + "> " + actor.olgaVinichenko.education[i]  +  "</li>";
		}
		result += "</ul>";
	return result;
}

		var otvet;
$("div.actor").click(function(event){
	var actorName = ""
	actorName = $(this).attr('id');
	test("actor's name is: " + actorName);
	$("#panel").html("Name of the Actor: " + actorName);
	var json_actors = $.getJSON('json/actors.json', function(actor){
	$(this).html("");
	var items = [];
	var array_of_acts_names = [];
// 	var parsed_actors = jQuery.parseJSON(actor);
/*
	test(parced_actors);
	alert(parsed_actors)
*/
	$.each( actor, function( key, val ) {
console.log(key + ": "+ val);
			items.push( "<li id='" + key + "'>" + val.length + "</li>" );

	var theaExp = list_exp(actor , actorName, key );
	var personal_education = list_educ(actor , actorName, key );
			array_of_acts_names.push(
				"<div class='panel menu vertical large-4  columns'>" + 
'<li id=' + key + '> <h4>Имя</h4>: ' + actor.olgaVinichenko.name + '</li>'+
'<li id=' + key + '><h4>Дата рождения</h4> : ' + actor.actorName.B_date+ '</li>'+
'<li id=' + key + '> <h4>Место рождения:</h4> ' + actor.olgaVinichenko.B_place+ '</li>'+
'<li id=' + key + '> <h4>Образование:</h4> '+ personal_education +
'<li id=' + key + '> <h4>Работы в театре: </h4>'+ theaExp + 
"</div> "+" <button class='close-button' aria-label='Close alert' type='button'>" + 
   " <span aria-hidden='true'>&times;</span>" + 
  "</button>"
			);// [array_of_acts_names].push();
			json_actors = $.parseJSON(json_actors);
			test(items);
		});
		$("#"+actorName).replaceWith($( "<ul>", {
				"class": "actor",
				html: array_of_acts_names.join( "" )
				}));

});

});
});
</script>
<?php include_once("inc/footer.php"); ?>

