
<nav class="menu">
  <h1 class="name"><i class="fi-widget"></i> <?php echo "$topBarContent[1]" ?></a></h1>
  <ul class="inline-list">
  <?php 
  	while ( $i++ < count($topBarContent)) {
  		print_r("<li><a href='$pagination[$i]'>$topBarContent[$i]</a></li>");
  	}
  ?>
  </ul>
</nav>