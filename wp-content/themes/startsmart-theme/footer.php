
<?php if ( is_front_page() ) : ?>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <img src="<?php echo get_template_directory_uri() . '/vendors/images/icons/logo-footer.svg'; ?>" alt="footer-logo">
                        <h6><?php echo get_theme_mod( 'footer_courses_title', 'Курси особистих якостей.' ); ?></h6>
                        <p><?php echo get_theme_mod( 'footer_courses_descript', 'Aenean commodo lorem ipsum dolor' ); ?></p>
                    </div>
                    <div class="col-4 dev-block">
                        <h6><?php echo __( 'Розробка:' );?></h6>
                        <p><?php echo __( 'Сайт розроблений на курсах GeekHub' );?></p>
                        <p>
                            <span><?php echo __( 'Менеджери:' );?></span>
                            <?php echo __( 'Іван Іванич та Ольга Іванівна' );?>
                        </p>
                        <p>
                            <span><?php echo __( 'Дизайн:' );?></span>
                            <?php echo __( 'Віктор Іванич' );?>
                        </p>
                        <p>
                            <span><?php echo __( 'Розробка:' );?></span>
                            <?php echo __( 'Богдан Токарський, Михайло Озірний, Роман Красніков' );?>
                        </p>
                    </div>
                    <div class="col-3 soc-block">
                        <h6><?php echo get_theme_mod( 'soc_title', 'Ми в соц. мережах' ); ?></h6>
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
                </div>
            </div>
        </footer>
    </div><!-- #content -->
    </div><!-- #page -->

<?php else : ?>

        </div><!-- #content -->
    </div><!-- #page -->

    <footer class="site-footer">
        <div class="row">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri() . '/vendors/images/icons/logo-footer.svg'; ?>" alt="footer-logo">
                <h6><?php echo get_theme_mod( 'footer_courses_title', 'Курси особистих якостей.' ); ?></h6>
                <p><?php echo get_theme_mod( 'footer_courses_descript', 'Aenean commodo lorem ipsum dolor' ); ?></p>
            </div>
            <div class="col-4">
                <h6><?php echo __( 'Розробка:' );?></h6>
                <p><?php echo __( 'Сайт розроблений на курсах GeekHub' );?></p>
                <p>
                    <span><?php echo __( 'Менеджери:' );?></span>
                    <?php echo __( 'Іван Іванич та Ольга Іванівна' );?>
                </p>
                <p>
                    <span><?php echo __( 'Дизайн:' );?></span>
                    <?php echo __( 'Віктор Іванич' );?>
                </p>
                <p>
                    <span><?php echo __( 'Розробка:' );?></span>
                    <?php echo __( 'Богдан Токарський, Михайло Озірний, Роман Красніков' );?>
                </p>
            </div>
            <div class="col-4">
                <h6><?php echo get_theme_mod( 'soc_title', 'Ми в соц. мережах' ); ?></h6>
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
        </div>
    </footer>

<?php endif;

wp_footer(); ?>

</body>
</html>
