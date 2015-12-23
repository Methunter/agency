    <!-- Navigation -->
    <div class=" sticky">

      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a class="logo show-for-small-only" href="#"><img src="http://placehold.it/50x50" /></a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">

          <div class="logo-wrapper hide-for-small-only">
            <div class="logo">
              <img src="http://placehold.it/350x150">
            </div>
          </div>

          <!-- Right Nav Section -->
          <ul class="right">
<?php mtrPrint($menu_pages);?>
          </ul>

          <!-- Left Nav Section -->
          <ul class="left">
            <li class="has-dropdown">
              <a href="#">Menu 4</a>
              <ul class="dropdown">
                <li><a href="#">First link in dropdown</a></li>
              </ul>
            </li>
            <li class="has-dropdown">
              <a href="#">Menu 5</a>
              <ul class="dropdown">
                <li><a href="#">First link in dropdown</a></li>
              </ul>
            </li>
          </ul>

        </section>
      </nav>

    </div><!-- /navigation -->