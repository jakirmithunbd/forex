    <footer class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 col widget footer-img">
                    <img src="../images/logo.png" class="img-responsive" alt="">
                    <address>
                        NEW PORT, CARDIFF, CF23 9AR, UNITED KINGDOM 
                    </address>
                    <a href="mailto:SUPPORT@DUXFOREX.COM">SUPPORT@DUXFOREX.COM</a>
                </div>
                <div class="col-md-4 col-xs-6 col widget footer-menu">
                    <?php wp_nav_menu( 
                          array(
                          'menu'               => 'Main Menu',
                          'theme_location'     => 'footer_menu',
                          'depth'              => 2,
                          'container'          => 'false',
                          'menu_class'         => 'nav navbar-nav',
                          'menu_id'            => '',
                          'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                          'walker'             => new wp_bootstrap_navwalker()
                          ) 
                        ); 
                    ?>
                </div>
                <div class="col-md-4 col-xs-6 col widget social-media">
                    <ul class="list-inline">
                        <?php 
                            $social = get_field('social_link');
                            foreach ($social as $soci):
                            $link = $soci['s_link', 'options'];
                            $icon = $soci['s_icon', 'options'];
                         ?>
                        <!-- <li><a href="https://www.facebook.com/duxforex"><span class="ion-social-facebook"></span></a></li> -->
                        <li><a href="<?php echo $link; ?>"><span class="ion-social-<?php echo $icon; ?>"></span></a>
                        </li>
                        <?php endforeach; ?>
                        <!-- <li><a href="https://twitter.com/duxforex"><span class="ion-social-twitter"></span></a></li>
                        <li><a href="https://plus.google.com/+DuxForexOfficial/posts"><span class="ion-social-googleplus"></span></a></li>
                        <li><a href="https://www.pinterest.com/duxforex/"><span class="ion-social-pinterest"></span></a></li>
                        <li><a href="https://ca.linkedin.com/in/dux-forex-575b22113"><span class="ion-social-linkedin"></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UClng6oCG52lyK1OMoGpGn3A"><span class="ion-social-youtube"></span></a></li>
                        <li><a href="https://duxforex.tumblr.com/"><span class="ion-social-tumblr"></span></a></li>
                        <li><a href="https://www.reddit.com/user/duxforex/"><span class="ion-social-reddit"></span></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright &copy; 2018.Dux Forex, Most Accurate Signals With E-mail & Mobile Alerts </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>