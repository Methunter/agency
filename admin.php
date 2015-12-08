<?php
$page="admin";
include_once("inc/header.php");
?>



<!-- Start of the body content for CoffeeCup Web Form Builder -->
<a class='fb_iframe' href="./addPerson/addPerson.html">Click here</a>
<!-- End of the body content for CoffeeCup Web Form Builder -->
<script src="./addPerson/common/libs_js/jquery-1.4.4.min.js"></script>
<script src="./addPerson/colorbox/jquery.colorbox.js"></script>


<script>
  var $fb_pop = jQuery.noConflict();

  $fb_pop(document).ready(function(){
    setTimeout( function(){ $fb_pop.colorbox({href:"./addPerson/addPerson.html", iframe:true, innerWidth:"475px", height:"60%", maxHeight:"880px", fixed:true}) }, 30 );
    $fb_pop(".fb_iframe").colorbox({iframe:true, innerWidth:"475px", height:"80%", maxHeight:"1480px", fixed:true }); 
  });
</script>
<?php
include("inc/footer.php");
?>cs

