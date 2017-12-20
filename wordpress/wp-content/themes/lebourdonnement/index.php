<?php
    $templateURI = get_template_directory_uri();
    $isHomePage = is_home() && is_front_page();
?>
<!DOCTYPE html>
<html lang="fr">

    <?php get_template_part('head', 'none'); ?>


  <body <?php echo('id="'.( $isHomePage ? 'home' : 'page').'"') ?>>

    <!-- Navigation -->
    <?php get_template_part('navigation', 'none'); ?>
    <?php get_header(); ?>


<div id="global_headlines">

    <?php if ( have_posts() ) : ?>
        <?php if ( is_home() && ! is_front_page() ) : ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <?php
            if ($isHomePage){
                $i = 0;
                while (have_posts()) : the_post();
                    $i++;
                    if($i % 2 == 0){
                        get_template_part('content', 'preview-even');
                    }
                    else {
                        get_template_part('content', 'preview-odd');
                    }
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'lebourdonnement' ),
                    'next_text'          => __( 'Next page', 'lebourdonnement' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'lebourdonnement' ) . ' </span>',
                ));
            }
            else {
                while (have_posts()) : the_post();
                    get_template_part('content', '');
                endwhile;
            }

    // If no content, include the "No posts found" template.
    else :
        //get_template_part('content', 'none');

    endif;
    ?>
</div>

    <?php get_footer(); ?>

    <?php
        echo(
            '<!-- Bootstrap core JavaScript -->
            <script src="' . $templateURI . '/vendor/jquery/jquery.min.js"></script>
            <script src="' . $templateURI . '/vendor/popper/popper.min.js"></script>
            <script src="' . $templateURI . '/vendor/bootstrap/js/bootstrap.min.js"></script>

            <!-- custom scripts -->
            <script src="' . $templateURI . '/js/scripts.js"></script>'
        );
    ?>
  </body>

</html>
