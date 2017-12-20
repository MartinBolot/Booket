
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <div class="navbar-brand">Édition du <span id="date_edition"></span></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (has_nav_menu('navigation-menu')) : ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php
                $customWalker = new Walker_custom();
                // Primary navigation menu.
                wp_nav_menu(array(
                    'menu_class' => 'navbar-nav ml-auto',
                    'theme_location' => 'navigation-menu',
                    'container' => '',
                    'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
                    'walker' => $customWalker
                ));
            ?>
        </div>
    <?php endif; ?>
  </div>
</nav>
