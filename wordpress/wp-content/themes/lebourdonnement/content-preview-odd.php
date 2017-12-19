<?php ?>
<article class="preview-odd" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
			  	<?php
			  		the_post_thumbnail(
						'home-thumbnail',
						array(
							//'class' => 'img-fluid rounded-circle wp-post-image'
							'class' => 'img-fluid'
						)
					);
				?>
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
				<?php
					the_title(sprintf('<h2 class="display-4"><a href="%s">', esc_url(get_link_url())), '</a></h2>');
				?>
              <div class="home_teaser">
  				<?php
				  	the_content('');
				?>
			</div>
            </div>
          </div>
        </div>
	</div>
</article>
