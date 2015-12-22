<?php include_once("inc/header.php");?>
<!-- <p><a  data-toggle="modal">Добавить актёра</a></p> -->
<p><a id="Modal" href="#" data-open="insertPerson">Добавить актёра</a></p>
<div class="large reveal" id="insertPerson" data-reveal></div>
<div id="form_place"></div>


  <script>
  // IIFE - Immediately Invoked Function Expression
  (function($, window, document) {

    // The $ is now locally scoped 

   // Listen for the jQuery ready event on the document
   $(function() {

     // The DOM is ready!
     console.log('The DOM is ready!');
     var revMod = $('#revMod').click(function(event) {
     	event.preventDefault();
     });


    $("#insertPerson").matterO("inject","new.html");



     $(".form_link").on('click', function(event) {
     	event.preventDefault();
     	$('#form_place').matterO("getName" , "new.html" ).done(function(data){
     		$("#form_place").html(data);
     	});
     });	
     $("#get-out").on('click', function(event) {
 console.log("close!");
     	$('#form_place').html("#insertPerson");
     });
   });

   // The rest of code goes here!
    console.log('The DOM may not be ready!');

  }(window.jQuery, window, document));
  </script>
<?php include("inc/footer.php"); ?>