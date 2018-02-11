<?php
    $siteTitle = get_bloginfo("name");
    $siteDescription = get_bloginfo("description");
?>

<header class="masthead">
  <div class="overlay">
    <div class="container">
        <?php
            if ( is_home() && is_front_page()){
                ?>
                      <h1 class="display-1 text-white"><?php echo($siteTitle) ?></h1>
                      <h2 class="display-4 text-white"><?php echo($siteDescription) ?></h2>
                 <?php
            }
            else {
                ?>
                    <h1 class="display-1 text-white">
                        <?php the_title(); ?>
                    </h1>
                <?php
            }
        ?>
    </div>
  </div>
</header>
