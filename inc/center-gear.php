
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
<style>
	.row {
  max-width: 100%; }

.menu {
  background-color: #292c2f;
  padding: 1.5rem 3rem;
  height: auto; }
  .menu .inline-list {
    text-align: center; }
    .menu .inline-list li {
      float: none;
      display: inline-block; }
    .menu .inline-list a {
      color: #fff;
      padding-bottom: 0.5rem; }
      .menu .inline-list a:hover {
        color: dodgerblue;
        transition: all .3s ease-in-out; }
    .menu .inline-list .active a {
      color: dodgerblue; }
  @media only screen and (min-width: 40.063em) {
    .menu {
      height: 5rem; }
      .menu .inline-list {
        float: right; }
      .menu a:hover {
        border-bottom: 2px solid dodgerblue; } }

.name {
  text-align: center;
  font-size: 1.5rem;
  line-height: 1;
  margin: 0 0 1rem 0;
  color: #fff; }
  .name i {
    color: dodgerblue;
    margin-right: 0.5rem; }
  @media only screen and (min-width: 40.063em) {
    .name {
      float: left; } }
</style>
<nav class="menu">
  <h1 class="name"><i class="fi-widget"></i> <?php echo("$topBarContent[$i]") ?></a></h1>
  <ul class="inline-list">
    <?php 
  	while ( $i++ < count($topBarContent)) {
  		print_r("<li><a href='$pagination[$i]'>$topBarContent[$i]</a></li>");
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
