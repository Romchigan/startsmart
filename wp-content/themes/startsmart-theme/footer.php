
<?php if ( is_front_page() ) : ?>

        <footer class="site-footer">
            <div class="col-4">
                <img src="" alt="footer-logo">
                logo
            </div>
            <div class="col-4">
                d
            </div>
            <div class="col-4">
                <h5></h5>
                <?php
                if( get_theme_mod( 'soc_chec' ) == true ) : ?>
                    <div class="footer-social">
                        <?php
                        if( get_theme_mod( 'vk_chec' ) == true ) :
                            ?>
                            <a href="<?php echo get_theme_mod( 'vk_link', 'https://vk.com/' ); ?>" class="vk">
                                <img src="<?php echo get_template_directory_uri() . '/vendors/images/icons/vk.svg'; ?>" alt="vk">
                            </a>
                            <?php
                        endif;
                        if( get_theme_mod( 'fb_chec' ) == true ) :
                            ?>
                            <a href="<?php echo get_theme_mod( 'fb_link', 'https://www.facebook.com/' ); ?>" class="fb">
                                <img src="<?php echo get_template_directory_uri() . '/vendors/images/icons/fb.svg'; ?>" alt="fb">
                            </a>
                            <?php
                        endif;
                        if( get_theme_mod( 'insta_chec' ) == true ) :
                            ?>
                            <a href="<?php echo get_theme_mod( 'in_link', 'https://www.instagram.com/' ); ?>" class="insta">
                                <img src="<?php echo get_template_directory_uri() . '/vendors/images/icons/insta.svg'; ?>" alt="instagram">
                            </a>
                            <?php
                        endif;
                        if( get_theme_mod( 'you_chec' ) == true ) :
                            ?>
                            <a href="<?php echo get_theme_mod( 'you_link', 'https://www.youtube.com/' ); ?>" class="you-t">
                                <img src="<?php echo get_template_directory_uri() . '/vendors/images/icons/youtube.svg'; ?>" alt="youtube">
                            </a>
                        <?php
                        endif; ?>
                    </div>
                <?php
                endif; ?>
            </div>
        </footer>
    </div><!-- #content -->
    </div><!-- #page -->

<?php else : ?>

        </div><!-- #content -->
    </div><!-- #page -->

    <footer class="site-footer">
        <div class="col-4">
            <img src="" alt="footer-logo">
            s
        </div>
        <div class="col-4">
            d
        </div>
        <div class="col-4">
            <?php
            if( get_theme_mod( 'soc_chec' ) == true ) : ?>
                <div class="footer-social">
                    <?php
                    if( get_theme_mod( 'vk_chec' ) == true ) :
                        ?>
                        <a href="<?php echo get_theme_mod( 'vk_link', 'https://vk.com/' ); ?>" class="vk">
                            <img src="vendors/images/icons/vk.svg" alt="">
                        </a>
                        <?php
                    endif;
                    if( get_theme_mod( 'fb_chec' ) == true ) :
                        ?>
                        <a href="<?php echo get_theme_mod( 'fb_link', 'https://www.facebook.com/' ); ?>" class="fb">
                            <img src="vendors/images/icons/fb.svg" alt="">
                        </a>
                        <?php
                    endif;
                    if( get_theme_mod( 'insta_chec' ) == true ) :
                        ?>
                        <a href="<?php echo get_theme_mod( 'in_link', 'https://www.instagram.com/' ); ?>" class="insta">
                            <img src="vendors/images/icons/instagram.svg" alt="">
                        </a>
                        <?php
                    endif;
                    if( get_theme_mod( 'you_chec' ) == true ) :
                        ?>
                        <a href="<?php echo get_theme_mod( 'you_link', 'https://www.youtube.com/' ); ?>" class="you-t">
                            <img src="vendors/images/icons/youtube.svg" alt="">
                        </a>
                        <?php
                    endif; ?>
                </div>
                <?php
            endif; ?>
        </div>
    </footer>

<?php endif;

wp_footer(); ?>

</body>
</html>
