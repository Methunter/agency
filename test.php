<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
/**
 * @Author: m32sa
 * @Date:   2015-12-05 19:03:19
 * @Last Modified by:   m32sa
 * @Last Modified time: 2015-12-06 00:53:16
 */

include("inc/header.php");?>
<p><a data-open="exampleModal1">Click me for a modal</a></p>

<div class="reveal" id="exampleModal1" data-reveal>
  <h1>Awesome. I Have It.</h1>
  <p class="lead">Your couch. It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<a href="#" data-reveal-id="myModal" class="button">Launch Signup Modal</a>

<div id="myModal" class="reveal-modal remove-whitespace" data-reveal>
<div class="row">
    <div class="large-6 columns auth-plain">
      <div class="signup-panel left-solid">
        <p class="welcome">Registered Users</p>
        <form>
          <div class="row collapse">
            <div class="small-2  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>
            <div class="small-10  columns">
              <input type="text" placeholder="username">
            </div>
          </div>
          <div class="row collapse">
            <div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>
            <div class="small-10 columns ">
              <input type="text" placeholder="password">
            </div>
          </div>
        </form>
        <a href="#" class="button ">Log In </a>
      </div>
    </div>

    <div class="large-6 columns auth-plain">
    	<div class="signup-panel newusers">
    		<p class="welcome"> New User?</p>
    		<p>By creating an account with us, you will be able to move through the checkout process faster, view and track your orders, and more.</p><br>
    		<a href="#" class="button ">Sign Up</a></br>
    	</div>
    </div>

   </div>   
  <a class="close-reveal-modal">&#215;</a>
</div>   
<?php

include("inc/footer.inc");

?>
</body>
</html>