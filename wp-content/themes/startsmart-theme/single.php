<?php get_header(); ?>
	<div id="primary" class="content-area page-content single-post-page-content">
		<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );
			the_post_navigation();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

    <section class="recent-posts">
        <div class="container">
            <h2 class="recent-posts-title recent-posts-blog-page-title text-center section-heading"><?php echo get_theme_mod('recent-posts-blog-page-title');?></h2>
            <p class="recent-posts-description text-center section-description"><?php echo get_theme_mod('recent-posts-description');?></p>
            <div class="row">
                <?php
                    $args=array(
                        'post__not_in' => array($post->ID),
                        'showposts'=>3,
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
													<div class="col-xs-12 col-md-4 recent-post section-description">
														<a href="<?php the_permalink(); ?>"><div class="recent-post-img"><?php the_post_thumbnail(); ?></div></a>
                              <?php the_category(); ?>
														<a href="<?php the_permalink();?>" class="recent-post-title"><h3 class="section-sub-heading"><?php the_title(); ?></h3></a>
														<p class="recent-post-description"><?php the_excerpt(); ?></p>
													</div>
                            <?php
                        }
                    }
                    wp_reset_query();
                ?>
            </div>
        </div>
    </section>
<?php get_footer();
