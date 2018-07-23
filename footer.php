    <footer class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 col widget footer-img">
                    <?php 
                        $img = get_field('footer_logo', 'options');
                        $add = get_field('address_text', 'options');
                        $email_link = get_field('e-mail', 'options');
                        $email = get_field('e-mail', 'options');
                     ?>
                    <img src="<?php echo $img; ?>" class="img-responsive" alt="<?php echo $img; ?>">
                    <address>
                        <?php echo $add; ?> 
                    </address>
                    <a href="mailto:<?php echo $email_link['e-mail_link']; ?>"><?php echo $email['e-mail_text']; ?></a>
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
                            $social = get_field('social_link', 'options');
                            foreach ($social as $soci):
                            $link = $soci['s_link'];
                            $icon = $soci['s_icon'];
                         ?>
                        <li><a href="<?php echo $link; ?>"><span class="ion-social-<?php echo $icon; ?>"></span></a>
                        </li>
                        <?php endforeach; ?>
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