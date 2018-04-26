<?php 
    $page_id = get_queried_object_id();
    get_header();

    /*
        Template Name: Home
    */

 ?>
    
    <?php if (get_field('banner_enable_disable')): ?>
    <section class="banner">
        <?php 
            $banner_item = get_field('b_banner_item');
            $image      = get_field('banner_image');
            foreach ($banner_item as $item):
            $title      = $item['banner_title'];
            $des        = $item['banner_description'];
            $btn_text   = $item['b_button']['b_button_text'];
            $btn_link   = $item['b_button']['b_button_link'];
            $intro_img  = $item['banner_intro_image'];
         ?>
        <div class="item" style="background: url(<?php echo $image; ?>);">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-xs-12 banner-content">
                    <?php if ($title || $des): ?>
                        <h1><?php echo $title; ?></h1>
                        <?php echo $des; ?>
                    <?php endif; ?>
                    <?php if ($btn_link || $btn_text): ?>
                        <a href="<?php echo $btn_link; ?>" class="btn"><?php echo $btn_text; ?></a>
                    <?php endif; ?>
                </div>
                <?php if ($intro_img): ?>
                <div class="col-md-6 col-sm-6 col-xs-12 banner-content">
                    <img src="<?php echo $intro_img; ?>" class="img-responsive" alt="">
                </div>
            <?php endif; ?>
            </div>
        </div>
        <?php endforeach;?>
    </section><!--/ Banner -->
    <?php endif; ?>
    
    <?php if (get_field('service_enable_disable')): ?>
    <section class="forex-signal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 forex-signal-slider">
                    <div class="signal-slider">
                        <?php 
                            $service_item = get_field('services_forex_slider');
                            foreach ($service_item as $service):
                            $s_img = $service['forex_slider_image'];
                            $s_title = $service['forex_slider_title'];
                            $s_con = $service['forex_slider_description'];
                         ?>
                        <div class="item">
                            <?php if ($s_img): ?>
                                <img src="<?php echo $s_img; ?>" class="img-responsive" alt="">
                            <?php endif; ?>
                            <?php if ($s_title && $s_con): ?>
                            <div class="signal-content">
                                <h1><?php echo $s_title; ?></h1>
                                <?php echo $s_con; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 signal-service">
                    <ul class="list-inline">
                        <?php 
                            
                            $content_item = get_field('service_item');
                            foreach ($content_item as $content):
                            $img        = $content['service_image'];
                            $ser_title  = $content['service_title'];
                            $ser_cont   = $content['service_content'];
                         ?>
                        <li>
                            <?php if ($img): ?>
                                <img src="<?php echo $img; ?>" class="img-responsive" alt="">
                            <?php endif; ?>
                            <?php if ($ser_title && $ser_cont): ?>
                            <div class="content">
                                <h5><?php echo $ser_title; ?></h5>
                                <?php echo $ser_cont; ?>
                            </div>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if (get_field('signal_interface_enable_disable')): 
        $img = get_field('signal_interface_image');
        $title = get_field('signal_interface_title');
        $des = get_field('signal_interface_description');
        $btn_text = get_field('button');
        $btn_link = get_field('button');
    ?>
    <section class="signal-interface section-padding">
        <div class="container">
            <div class="row">
                <?php if ($img): ?>
                <div class="col-md-6 col">
                    <div class="interface-img">
                        <img src="<?php echo $img; ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-md-6">
                    <?php if ($title && $des): ?>
                    <div class="interface-content">
                        <h2><?php echo $title; ?></h2>
                        <?php echo $des; ?>
                        <a href="<?php echo $btn_link['button_link']; ?>" class="btn btn-join"><?php echo $btn_text['button_text']; ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if (get_field('involvement_enable_disable')): ?>
    <section class="services involvement section-padding">
        <div class="container">
            <div class="row reverse">
                <div class="col-md-6">
                    <div class="services-content">
                        <?php 
                            $title = get_field('involvement_title');
                         ?>
                        <?php if ($title): ?>
                            <h3><?php $title; ?></h3>
                        <?php endif; ?>
                        <ul class="list-inline">
                            <?php 
                                $inv_list = get_field('involvement_list');
                                foreach ($inv_list as $inv):
                                $con = $inv['involvement_text'];
                                $img = get_field('involvement_image');
                             ?>
                             <?php if ($con): ?>
                            <li><span class="ion-checkmark"></span><?php echo $con; ?></li>
                            <?php endif; endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if ($img): ?>
                    <div class="services-img">
                        <img src="<?php echo $img; ?>" class="img-responsive" alt="">
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section><!--/ involvement -->
    <?php endif; ?>
    
    <?php if (get_field('contributor_enable_disable')): ?>
    <section class="services contributor section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="services-content">
                        <?php 
                            $title = get_field('contributor_title');
                         ?>
                         <?php if ( $title): ?>
                            <h3>Our Contribution To The Forex</h3>
                         <?php endif; ?>
                        <ul class="list-inline">
                            <?php 
                                $list = get_field('contributor_list');
                                foreach ($list as $list_item):
                                $con = $list_item['contributor_text'];
                                $img = get_field('contributor_image');
                             ?>
                            <li><span class="ion-checkmark"></span>
                                <?php echo $con; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if ($img ): ?>
                    <div class="services-img">
                        <img src="<?php echo $img; ?>" class="img-responsive" alt="">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section><!--/ Signal profitable -->
    <?php endif; ?>
    
    <?php if (get_field('profitable_enable_disable')): ?>
    <section class="services signal-profit section-padding">
        <div class="container">
            <div class="row reverse">
                <div class="col-md-6">
                    <div class="services-content">
                        <?php 
                            $title = get_field('profitable_title');
                         ?>
                         <?php if ($title): ?>
                            <h3>Are Our Trading Signals Profitable?</h3>
                         <?php endif; ?>
                        <ul class="list-inline">
                            <?php 
                                $profit_list = get_field('profitable_list');
                                foreach ($profit_list as $profit):
                                $con  = $profit['profitable_content'];
                                $img  = get_field('profitable_image');
                             ?>
                            <?php if ($con): ?>
                                <li><span class="ion-checkmark"></span><?php echo $con; ?></li>
                            <?php endif ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if ($img ): ?>
                    <div class="services-img">
                        <img src="<?php echo $img; ?>" class="img-responsive" alt="">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section><!--/ Signal profitable -->
    <?php endif; ?>
    
    <?php if (get_field('advice_enable_disable')): ?>
    <section class="services call-to-action section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                        $title = get_field('advice_title');
                     ?>
                    <div class="services-content">
                        <h3><?php echo $title; ?></h3>
                        <ul class="list-inline">
                            <?php 
                                $ad_list = get_field('advice_item');
                                foreach ($ad_list as $list ):
                                $con  = $list['advice_content'];
                                $img  = get_field('advice_image');
                            ?>
                            <?php if ($con): ?>
                            <li><span class="ion-checkmark"></span><?php echo $con; ?></li>
                            <?php endif; endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if ($img): ?>
                    <div class="services-img">
                        <img src="<?php echo $img; ?>" class="img-responsive" alt="">
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section><!--/ call-to-action -->
    <?php endif; ?>
    
    <?php if (get_field('customer_service_enable_disable')): 
    $title = get_field('customer_title');
    $des   = get_field('customer_description');
    ?>
    <section class="pricing-service section-padding">
        <div class="container">
            <div class="row justify-content-center title">
                <?php if ($title && $des): ?>
                <div class="col-md-10 col-sm-10 text-center">
                    <h1><?php echo $title; ?></h1>
                    <?php echo $des; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="row pricing-service-item">
                <?php 
                    $service_item = get_field('customer_services');
                    foreach ($service_item as $service):
                    $s_title = $service['customer_services_title'];
                    $s_con = $service['customer_services_content'];
                 ?>
                <div class="col-md-6 col-sm-6 col-xs-6 col">
                    <?php if ($s_title && $s_con): ?>
                    <div class="service-item text-center">
                        <h4><?php echo $s_title; ?></h4>
                        <?php echo $s_con; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- /pricing-service -->
    <?php endif; ?>
    
    <?php if (get_field('pricing_enable_disable')): ?>
    <section class="pricing-table section-padding">
        <div class="container">
            <?php 
                $titl  = get_field('pricing_title');
             ?>
            <div class="row">
                <div class="col-sm-12">
                    <?php if ($titl): ?>
                        <div class="text-center section-title">
                            <h3><?php echo $titl; ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <?php 
                    $table  = get_field('pricing_table');
                    foreach ($table as $table_item):
                    $plan   = $table_item['price_time'];
                    $price   = $table_item['package_price'];
                 ?>
                <div class="col-md-4 col-sm-6 col-xs-6 col">
                    <div class="pricingTable">
                        <?php if ($plan): ?>
                            <h3 class="title"><?php echo $plan; ?></h3>
                        <?php endif; ?>
                        <?php if ($price): ?>
                            <div class="price-value">
                                <span class="month"><?php echo $price; ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="pricing-content">
                            <ul>
                                <?php 
                                    $package = get_field($table_item['package_service']);
                                    foreach ($package as $package_list):
                                    $package_se = $package_list['$package_list'];
                                 ?>
                                <li><?php echo $package_se; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#" class="btn btn-color">Start Now<span class="ion-paper-airplane"></span></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 col">
                    <div class="pricingTable">
                        <h3 class="title">1 Year Plan</h3>
                        <div class="price-value">
                            <span class="month"><sup>$</sup>47</span>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li>Accurate Signals</li>
                                <li>E-mail Alerts</li>
                                <li>Sound Alerts</li>
                                <li>Entries, SL And 3 TP</li>
                                <li>All Major Currency Pairs</li>
                                <li>Mobile Support</li>
                            </ul>
                            <a href="#" class="btn btn-color">Start Now<span class="ion-paper-airplane"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 col">
                    <div class="pricingTable">
                        <h3 class="title">3 Year Plan</h3>
                        <div class="price-value">
                            <span class="month"><sup>$</sup>112</span>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li>Accurate Signals</li>
                                <li>E-mail Alerts</li>
                                <li>Sound Alerts</li>
                                <li>Entries, SL And 3 TP</li>
                                <li>All Major Currency Pairs</li>
                                <li>Mobile Support</li>
                            </ul>
                            <a href="#" class="btn btn-color">Start Now<span class="ion-paper-airplane"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/ pricing table -->
    <?php endif; ?>
    
    <?php if (get_field('forex_award_enable_disable')): ?>
    <section class="services why-we-best section-padding">
        <div class="container">
            <div class="row">
                <?php 
                    $img = get_field('award_image');
                    $title = get_field('forex_award_title');
                    $des= get_field('forex_award_description');
                 ?>
                <div class="col-md-6">
                    <?php if ($img): ?>
                    <div class="services-img">
                        <img src="<?php echo $img; ?>" class="img-responsive" alt="">
                    </div>
                    <?php endif;?>
                </div>
                <div class="col-md-6">
                    <div class="services-content">
                        <?php if ($title): ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif ?>
                        <?php if ($des): ?>
                            <?php echo $des; ?>
                        <?php endif ?>
                        <ul class="list-inline">
                            <?php 
                                $item = get_field('award_item');
                                foreach ($item as $ite):
                                $con = $ite['award_content'];
                             ?>
                             <?php if ($con): ?>
                            <li><span class="ion-checkmark-circled"></span><p>
                                <?php echo $con; ?></p>
                            </li>
                            <?php endif; endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/ Signal profitable -->
    <?php endif; ?>

<?php get_footer(); ?>