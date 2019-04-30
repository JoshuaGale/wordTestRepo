<!--Start Footer Wrapper -->
<div class="footer_wrapper">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>  
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="footer_bottom">
    <div class="container_24">
        <div class="grid_24">
            <div class="bottom_footer_content">
                <div class="grid_12 alpha">
                    <div class="copyright">
                        <p class="copyright">
                            <a href="http://wordpress.org/" rel="generator">
                                <?php
                                _e('Powered by WordPress', 'salejunction');
                                ?></a>
                            <span class="sep">&nbsp;|&nbsp;</span>
                            <?php printf(__('Theme: ', 'salejunction')); ?><a rel="nofollow" href="<?php echo esc_url(__('https://www.inkthemes.com/market/wordpress-marketplace-theme/', 'salejunction')); ?>"><?php printf(__(' %s', 'salejunction'), 'SaleJunction'); ?></a><?php printf(__(' By %s', 'salejunction'), 'InkThemes'); ?>
                        </p>
                    </div>
                </div>
                <div class="grid_12 omega">   
                <ul class="social_logos">
                        <?php if (salejunction_get_option('salejunction_facebook') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_facebook')); ?>" title="Facebook">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_twitter') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_twitter')); ?>" title="Twitter">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_yahoo') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_yahoo')); ?>" title="Yahoo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/yahoo.png" alt="Yahoo" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_rss') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_rss')); ?>" title="Rss Feed">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt="Digg Icon" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_digg') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_digg')); ?>" title="Digg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/digg.png" alt="Digg icon" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_pinterest') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_pinterest')); ?>" title="Pinterest">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png" alt="Pinterest icon"
                                />
                            </a>
                        </li>
                        <?php } ?> 
                        <?php if (salejunction_get_option('salejunction_linkedin') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_linkedin')); ?>" title="Pinterest">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/in.png" alt="Linkedin icon"
                                />
                            </a>
                        </li>
                        <?php } ?> 
                        <?php if (salejunction_get_option('salejunction_instagram') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_instagram')); ?>" title="Instagram">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_google') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_google')); ?>" title="Google">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/g+.png" alt="Google icon"
                                />
                            </a>
                        </li>
                        <?php } ?> 
                        <?php if (salejunction_get_option('salejunction_youtube') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_youtube')); ?>" title="Youtube">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="Youtube icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_tumblr') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_tumblr')); ?>" title="Tumblr">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/tumblr.png" alt="Tumblr icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (salejunction_get_option('salejunction_flickr') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(salejunction_get_option('salejunction_flickr')); ?>" title="Flickr">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/flickr.png" alt="Flickr icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                    </ul>

                </div>		
            </div>	
        </div>
    </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
