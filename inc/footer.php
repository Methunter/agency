 <footer class="footer "    >
<hr>
  <div class="row">
    <div class="small-12 columns">
      <p class="slogan">Slogan</p>
      <p class="links">
        <a href="../index.php" class="" >Home</a>
        <a class="" id="facebook" href="#">Facebook</a>
        <a class="" href="../dist/">About</a>
        <a href="#">Faq</a>
        <a data-toggle="menuBar">Expand!</a>
        <a href="../contacts.php">Contact</a>
      </p>
      <p class="copywrite">© «Актёрское агентство» 2015</p>
    </div>
  </div>
  <!-- <div class="fb-like"data-share="true"data-width="450"data-show-faces="true"> </div> -->
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
</footer>
<!-- Не трогать тег! он начался в другом файле. -->
</div>			<!-- end of canvas&container -->
<!-- <script src="../bower_components/foundation-sites/dist/foundation.min.js"></script> -->
<script src="../dist/assets/js/app.js"></script>
<script src="/js/matter.js"></script>
<!-- <script src="../js/app.js"></script> -->
<script>
//   window.fbAsyncInit = function() {
//     FB.init({
//       appId      : '171137033242540',
//       xfbml      : true,
//       version    : 'v2.5'
//     });
//   };

//   (function(d, s, id){
//      var js, fjs = d.getElementsByTagName(s)[0];
//      if (d.getElementById(id)) {return;}
//      js = d.createElement(s); js.id = id;
//      js.src = "//connect.facebook.net/en_US/sdk.js";
//      fjs.parentNode.insertBefore(js, fjs);
//    }(document, 'script', 'facebook-jssdk'));
 </script>
<script>
$('.slogan').matterO('ofWidth');
// var elem = new Foundation.Sticky($("footer"), {
    // container : 'htm:bottom',
    // stickTo : 'bottom'
// });

    // $(document).foundation();
  </script>
</body>
</html>
