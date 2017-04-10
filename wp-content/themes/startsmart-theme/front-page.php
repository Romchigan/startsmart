<?php /** Template Name: Homepage Themplate */ get_header(); ?>
<div class="landing-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <img src="<?php echo get_theme_mod('landing-logo');?>" alt="landing-logo">
            </div>
            <div class="col-xs-12 col-md-6">
                <h1 class="landing-title"><?php echo get_theme_mod('landing-title');?></h1>
                <h4 class="landing-sub-title"><?php echo get_theme_mod('landing-sub-title');?></h4>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <section class="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <h2 class="about-us-title"><?php echo get_theme_mod('about-us-title');?></h2>
                    <p class="about-us-description"><?php echo get_theme_mod('about-us-description');?></p>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img src="<?php echo get_theme_mod('about-us-image');?>" alt="about-us-image">
                </div>
            </div>
        </div>
    </section>
    <section class="learning">
        <div class="container-fluid">
            <h2 class="learning-title text-center"><?php echo get_theme_mod('learning-title');?></h2>
            <div class="row">
                <?php query_posts('post_type=subject&posts_per_page=3'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-md-4 subject text-center">
                        <div class="subject-img"><?php the_post_thumbnail(); ?></div>
                        <h3 class="subject-title"><?php the_title(); ?></h3>
                        <p class="subject-content"><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section  class="team">
        <div class="container-fluid">
            <h2 class="team-title text-center"><?php echo get_theme_mod('team-title');?></h2>
            <div class="row">
                <?php query_posts('post_type=member&posts_per_page=3'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-md-4 member text-center">
                        <div class="member-photo"><?php the_post_thumbnail(); ?></div>
                        <h3 class="member-name"><?php the_title(); ?></h3>
                        <p class="member-info"><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="recent-posts">
        <div class="container-fluid">
            <h2 class="recent-posts-title text-center"><?php echo get_theme_mod('recent-posts-title');?></h2>
            <p class="recent-posts-description text-center"><?php echo get_theme_mod('recent-posts-description');?></p>
            <div class="row">
                <?php query_posts('post_type=post&posts_per_page=3'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-md-4 recent-post text-center">
                        <div class="member-photo"><?php the_post_thumbnail(); ?></div>
                        <p class="recent-post-category"><?php get_the_category(); ?></p>
                        <h3 class="recent-post-title"><?php the_title(); ?></h3>
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
                    <h2 class="learning-title"><?php echo get_theme_mod('contact-us-section-title');?></h2>
                    <p class="recent-posts-description"><?php echo get_theme_mod('contact-us-section-description');?></p>
                    <div class="address">
                        <h6 class="address-title"><?php echo get_theme_mod('address-title');?></h6>
                        <p class="address-info"><?php echo get_theme_mod('address-info');?></p>
                    </div>
                    <div class="message-us">
                        <h6 class="message-us-title"><?php echo get_theme_mod('message-us-title');?></h6>
                        <p class="message-us-mail"><?php echo get_theme_mod('message-us-mail');?></p>
                        <p class="message-us-social"><?php echo get_theme_mod('message-us-social');?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h6 class="message-us-title"><?php echo get_theme_mod('contact-form-title');?></h6>
                    <?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form"]' ); ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</div>

