<?php /** Template Name: Homepage Themplate */ get_header(); ?>
<div class="page-content">
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 d-flex justify-content-end flex-column">
                    <h2 class="about-us-title section-heading"><?php echo get_theme_mod('about-us-title');?></h2>
                    <p class="about-us-description section-description"><?php echo get_theme_mod('about-us-description');?></p>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img src="<?php echo get_theme_mod('about-us-image');?>" alt="about-us-image" class="about-us-image">
                </div>
            </div>
        </div>
    </section>
    <section class="learning">
        <div class="container">
            <h2 class="learning-title text-center section-heading"><?php echo get_theme_mod('learning-title');?></h2>
            <div class="row">
                <?php query_posts('post_type=subject&posts_per_page=3'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-md-4 subject text-center section-description">
                        <div class="subject-img"><?php the_post_thumbnail(); ?></div>
                        <h3 class="subject-title section-sub-heading"><?php the_title(); ?></h3>
                        <p class="subject-content section-description"><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section  class="team">
        <div class="container">
            <h2 class="team-title text-center section-heading"><?php echo get_theme_mod('team-title');?></h2>
            <div class="row">
                <?php query_posts('post_type=member&posts_per_page=3'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-md-4 member text-center section-description">
                        <div class="member-photo"><?php the_post_thumbnail(); ?></div>
                        <h3 class="member-name section-sub-heading"><?php the_title(); ?></h3>
                        <p class="member-info section-description"><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="recent-posts">
        <div class="container">
            <h2 class="recent-posts-title text-center section-heading"><?php echo get_theme_mod('recent-posts-title');?></h2>
            <p class="recent-posts-description text-center section-description"><?php echo get_theme_mod('recent-posts-description');?></p>
            <div class="row">
                <?php query_posts('post_type=post&posts_per_page=3'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-md-4 recent-post section-description">
                        <div class="recent-post-img"><?php the_post_thumbnail(); ?></div>
                        <?php the_category(); ?>
                        <a href="<?php the_permalink();?>" class="recent-post-title"><h3 class="section-sub-heading"><?php the_title(); ?></h3></a>
                        <p class="recent-post-description"><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="contact-us-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2 class="section-heading"><?php echo get_theme_mod('contact-us-section-title');?></h2>
                    <p class="section-description contact-us-description"><?php echo get_theme_mod('contact-us-section-description');?></p>
                   <div class="row">
										 <div class="col-1 pr-0">
											 <img src="<?php echo get_template_directory_uri() . '/vendors/images/contact-us/marker.svg'; ?>" alt="address" width="22" class="contact-us-icon">
										 </div>
										 <div class="col-11">
											 <div class="address">
												 <h6 class="section-sub-heading"><?php echo get_theme_mod('address-title');?></h6>
												 <p class="section-description"><?php echo get_theme_mod('address-info');?></p>
											 </div>
										 </div>
									 </div>
									<div class="row">
										<div class="col-1 pr-0">
											<img src="<?php echo get_template_directory_uri() . '/vendors/images/contact-us/mail.svg'; ?>" alt="mail" width="25" class="contact-us-icon">
										</div>
										<div class="col-11">
											<div class="message-us">
												<h6 class="section-sub-heading"><?php echo get_theme_mod('message-us-title');?></h6>
												<p class="section-description message-us-mail"><?php echo get_theme_mod('message-us-mail');?></p>
												<p class="section-description mb-0"><?php echo get_theme_mod('message-us-social');?></p>
											</div>
										</div>
									</div>
								</div>
                <div class="col-xs-12 col-md-6">
                   <div class="message-us-container">
										 <h6 class="section-sub-heading mb-0"><?php echo get_theme_mod('contact-form-title');?></h6>
                       <?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form"]' ); ?>
									 </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</div>

