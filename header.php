<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <?php wp_head(); ?>
    <body <?php body_class(); ?>>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <span class="icon-bar"><span class="inner"></span></span>
                        <span class="icon-bar"><span class="inner"></span></span>
                        <span class="icon-bar"><span class="inner"></span></span>
                    </button>
                    <?php 
                    	$logo = get_field('header_logo', 'options');
                    	if ($logo):
                     ?>
                    <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src="<?php echo $logo; ?>" alt="Logo Image"></a>
                	<?php endif; ?>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php wp_nav_menu( 
                          array(
                          'menu'               => 'Main Menu',
                          'theme_location'     => 'main_menu',
                          'depth'              => 2,
                          'container'          => 'false',
                          'menu_class'         => 'nav navbar-nav navbar-right',
                          'menu_id'            => '',
                          'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                          'walker'             => new wp_bootstrap_navwalker()
                          ) 
                        ); 
                    ?>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </header><!-- / Header --> 
    <div class="header_gutter"></div>