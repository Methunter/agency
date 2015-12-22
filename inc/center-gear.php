
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
<style>







</style>
<nav class="menu">
  <h1 class="name hide-for-medium-only"><i class="fi-widget"></i> <?php echo("$topBarContent[$i]") ?></a></h1>
  <ul class="inline-list">
    <?php 
    while ( $i++ < count($topBarContent)) {
      print_r("<li class='line'><a href='$pagination[$i]'>$topBarContent[$i]</a></li>");
    }
    ?>
<!--     <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Blog</a></li>
    <li><a href="#">Pricing</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Contact</a></li> -->
  </ul>
</nav>
<script>
  var scope = $("ul.inline-list").find('a');
  scope.matterO("enlight");
  console.log(scope);
</script>