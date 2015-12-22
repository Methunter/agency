<div class="title-bar" label="Мастерская" data-responsive-toggle="main-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">«Мастерская»</div>
</div>
<div class="top-bar" id="main-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu " id="menuBar" data-toggler=".expanded" data-dropdown-menu>
      <!-- <li class="menu-text">«Мастерская»</li> -->
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
      <?php mtrPrint($menu_pages); // inc/functions.php?>
    </ul>
  </div>
</div>