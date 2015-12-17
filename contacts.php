<?php 
include("inc/header.php"); 

?>                   <!-- beginning of content -->










<?php

/*ol
 * @Author: m32sa
 * @Date:   2015-12-04 00:43:11
 * @Last Modified by:   m32sa
 * @Last Modified time: 2015-12-06 02:34:59
 */
// include 'inc/header.inc';
?>
<h1 id="panel"></h1>
<ul class="actor"></ul>
<div class="actor" id="valeriaBudankova"><h1>budankova</h1></div>
<div class="actor" id="olgaVinichenko"><h1>olga</h1></div>
<!-- <ul id="driver"><li></li></ul> -->
<ul id="stage"></ul>
 <script src="/js/matter.js"></script>

<script type="text/javascript" language="javascript">
	$(document).ready(function() {
var test = function(string){
	console.log(string);
}
var list_exp = function( actor , name , key  ){
		var result =  "<ul>" ;

		for (var i = actor.olgaVinichenko.theatre_expirience.length - 1; i >= 0; i--) {
			result += "<li id=" + key + "> " + actor.olgaVinichenko.theatre_expirience[i]  +  "</li>";
1		}
		result += "</ul>";
	return result;
}
var list_educ = function( actor , name , key ){
		var result =  "<ul>" ;

		for (var i = actor.olgaVinichenko.education.length - 1; i >= 0; i--) {
			result += "<li id=" + key + "> " + actor.olgaVinichenko.education[i]  +  "</li>";
		}
		result += "</ul>";
	return result;
}

		var otvet ;
$("div.actor").click(function(event){
	var actorName = ""
	actorName = $(this).attr('id');
	test("actor's name is: " + actorName);
	$("#panel").html("Name of the Actor: " + actorName);
	$.getJSON('json/actors.json', function(actor){
	$(this).html("");
	var items = [];
	var array_of_acts_names = [];
	$.each( actor, function( key, val ) {

			items.push( "<li id='" + key + "'>" + val.length + "</li>" );

	var theaExp = list_exp(actor , actorName, key );
	var personal_education = list_educ(actor , actorName, key );
			array_of_acts_names.push(
'<li id=' + key + '> Имя: ' + actor.olgaVinichenko.name + '</li>'+
'<li id=' + key + '>Дата рождения : ' + actor.olgaVinichenko.B_date+ '</li>'+
'<li id=' + key + '> Место рождения: ' + actor.olgaVinichenko.B_place+ '</li>'+
'<li id=' + key + '> Образование: '+ personal_education +
'<li id=' + key + '> Работы в театре: '+ theaExp 
			);// [array_of_acts_names].push();	
		});
		$("#"+actorName).replaceWith($( "<ul>", {
				"class": "actor",
				html: array_of_acts_names.join( "" )
				}));

});
});
});
</script>

<!-- <script src="/js/jquery.js"></script>
<script src="/js/foundation.js"></script>
 -->



<?php
include_once("inc/footer.inc");
?>

