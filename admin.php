<?php
include_once("inc/header.php");
?>




<a class='form_link' href="new.html">Click here</a>
<div id="form_place"></div>


  <script>
  // IIFE - Immediately Invoked Function Expression
  (function($, window, document) {

    // The $ is now locally scoped 

   // Listen for the jQuery ready event on the document
   $(function() {

     // The DOM is ready!
     console.log('The DOM is ready!');
     $(".form_link").on('click', function(event) {
     	event.preventDefault();
     	$('#form_place').matterO("getName" , "new.html" ).done(function(data){
     		$("#form_place").html(data);
     	});
     });	
     $("#get-out").on('click', function(event) {

     	console.log("close!");
     	$('#form_place').html("");
     });




   });

   // The rest of code goes here!
    console.log('The DOM may not be ready!');

  }(window.jQuery, window, document));
  </script>
<?php
include("inc/footer.php");
?>

