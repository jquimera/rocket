<div class="more-demos">
  <h2>More demos</h2>
  <h4>layout</h4>
  <nav class="demo-links">
    <?php 
      $layouts = array('grid', 'gallery', 'justify', 'center', 'liquid-2');
      $cur = '';

      foreach ($layouts as $layout) {
        if ($pagename == 'layout-' . $layout) {
          $cur = 'class="current"';
        } else {
          $cur = '';
        }

        echo '<a href="layout-' . $layout . '.php"' . $cur . '>' . $layout . '</a>';
      }
    ?>
  </nav>
  <h4>components</h4>
  <nav class="demo-links">
    <?php 
      $components = array('button', 'media-list', 'offcanvas', 'mobile-nav-slide-in', 'dropdown', 'tabs', 'switch', 'accordion', 'push-toggle', 'checkbox', 'tooltip', 'flex-video', 'slider-carousel', 'slider-gallery'); 
      $cur = '';

      foreach ($components as $component) {
        if ($pagename == 'components-' . $component) {
          $cur = 'class="current"';
        } else {
          $cur = '';
        }
        
        echo '<a href="components-' . $component . '.php"' . $cur . '>' . $component . '</a>';
      }
    ?>
  </nav>
  <h4>addons</h4>
  <nav class="demo-links">
    <?php 
      $addons = array('type', 'font-size', 'visibility', 'breakpoint', 'color-functions'); 
      $cur = '';

      foreach ($addons as $addon) {
        if ($pagename == 'addons-' . $addon) {
          $cur = 'class="current"';
        } else {
          $cur = '';
        }
        
        echo '<a href="addons-' . $addon . '.php"' . $cur . '>' . $addon . '</a>';
      }
    ?>
  </nav>
</div>
