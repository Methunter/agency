<?php include_once("inc/header.php");?>


<!-- <p><a  data-toggle="modal">Добавить актёра in base</a></p> -->
<?php 




  // $own_fields = new DataSaveMySQL('rules');
  // $won_data = $own_fields->GetTransactionId();
  // $actor = new GetMysqlData("save_database");
  // $actor->show();
  // $actor->db->query( 'SHOW TABLES' );
// echo "<pre>1";
// print_r($myPage);
// echo "</pre>";
  //   echo "<pre>2";
  // print_r($myPage);
  // echo "</pre>";
?>
<p><a id="Modal" href="?action=confirmation" data-open="insertPerson">Добавить актёра</a></p>
<div class="reveal" id="insertPerson" data-reveal>

<script type="text/javascript">document.write(unescape("%3Ciframe id=\"fb_iframe\" src=\"officina.php" + window.location.search + "\" width=\"502\" height=\"759\"allowtransparency=\"true\" scrolling=\"no\" frameborder=\"0\"%3E&lt;a href=\"officina.php\" title=\"officina\"&gt;Check out my CoffeeCup Form&lt;/a&gt;%3C/iframe%3E"));</script>
<noscript>
  <iframe width="502" height="759" style="border:none; background:transparent; overflow:hidden;"
  id="fb_iframe" src="officina/officina.html">
    &lt;a href="officina.php" title="officina"&gt;Check out my CoffeeCup Form&lt;/a&gt;
  </iframe>
</noscript>
	<?php
	?>

</div>
<div id="form_place"></div>
<?php 

 ?>

<script>
  // IIFE - Immediately Invoked Function Expression
  (function($, window, document) {

    // The $ is now locally scoped 

   // Listen for the jQuery ready event on the document
   $(function() {

     // The DOM is ready!
     console.log('The DOM is ready!');
     var revMod = $('#Modal').click(function(event) {
     	event.preventDefault();
       $.ajax({
           url: 'test_form-builder.php',
           type: ' POST ',
           dataType: 'default', //: Intelligent Guess (Other values: xml, json, script, or html)
           data: {action: 'confirmation'},
       })
       .done(function() {
           console.log("success");
       })
       .fail(function() {
           console.log("error ");
       })
       .always(function() {
           console.log("complete");
       });
        
     });


    // $("#insertPerson").matterO("inject","inc/test_form-builder.php");



    // $(".form_link").on('click', function(event) {
    // 	event.preventDefault();
    // 	$('#form_place').matterO("getName" , "inc/test_form-builder.php" ).done(function(data){
    // 		$("#form_place").html(data);
    // 	});
    // });	
    // $("#get-out").on('click', function(event) {
    // 	console.log("close!");
    // 	$('#form_place').html("#insertPerson");
    // });
});

   // The rest of code goes here!
   console.log('The DOM may not be ready!');

}(window.jQuery, window, document));
</script>
<?php include("inc/footer.php"); ?>