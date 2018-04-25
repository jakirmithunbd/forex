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

    <section class="pricing-service section-padding">
        <div class="container">
            <div class="row justify-content-center title">
                <div class="col-md-10 col-sm-10 text-center">
                    <h1>What You'll Receive</h1>
                    <p>When you sign up with us, we make sure you're equip with the best tools. Know that you'll be receiving forex signals from some of the most experienced traders. We'll be trading the market with you and many tens and thousands of other subscribers will be following the same signals as well. If you're wanting accurate forex signals, whether you are a newbie or an experienced trader, Dux Forex is what you need. We are confident in our service and our success is very real. With e-mail and mobile alerts, it is very easy to profit from our signals. Leave the hard work to us and enjoy the benefits.</p>
                </div>
            </div>
            <div class="row pricing-service-item">
                <div class="col-md-6 col-sm-6 col-xs-6 col">
                    <div class="service-item text-center">
                        <h4>Forex Signals</h4>
                        <p>As a member, you will receive signals that include Entry, SL and 3 TP on most major currency pairs. We carefully analyze the market conditions and only send signals on the pair(s) with the highest probability of success. All trades are articulately calculated and researched. Economic news, price action, candlestick patterns etc are what we base our signals on.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col">
                    <div class="service-item text-center">
                        <h4>Mobile Alerts</h4>
                        <p>Download and install our free Dux Forex Notifier app on your phone. Whenever any signals or important news gets released, you will receive alerts. The notifications will play sound and vibrate. Our app can be downloaded free from Google Play and iTunes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col">
                    <div class="service-item text-center">
                        <h4>Easy user interface</h4>
                        <p>Our forex signals user interface is very easy to follow. Each entry will have it's own column which will be labeled accordingly. Based on the information there, you place the trades on your platform. Everything will automatically refresh without you needing to reload the page. It will also adjust to your screen size.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col">
                    <div class="service-item text-center">
                        <h4>Information Area</h4>
                        <p>All information including latest strategies, newly discovered breakthroughs and more will be available to you. Dux Forex also has a research team that is always looking for ways to better a traders experience. A member can also choose to receive alerts when things get posted.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col">
                    <div class="service-item text-center">
                        <h4>Free unlimited updates</h4>
                        <p>Any updates or service upgrades will be provided to you FREE of charge. When new features are added to the forex signals interface or when any type of upgrades are implemented, you never have to worry about any fee increase. You can enjoy all the benefits.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col">
                    <div class="service-item text-center">
                        <h4>Great customer support</h4>
                        <p>Any updates or service upgrades will be provided to you FREE of charge. When new features are added to the forex signals interface or when any type of upgrades are implemented, you never have to worry about any fee increase. You can enjoy all the benefits.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /pricing-service -->
    
    <section class="pricing-table section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center section-title">
                        <h3>Choose A Plan. All Plans Have The Same Features!</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 col">
                    <div class="pricingTable">
                        <h3 class="title">1 Month Plan</h3>
                        <div class="price-value">
                            <span class="month"><sup>$</sup>4.99</span>
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

    <section class="services why-we-best section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="services-img">
                        <img src="../images/dux_forex.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-content">
                        <h3>Our Forex Signals Win...Still The Best In 2018</h3>
                        <p>Dux Forex focuses on one thing and one thing only. That is to WIN. With our forex signals, we don't use silly lag indicators or over-hyped systems that you may have heard of. We use secret techniques that profit at special times of the day/night. We monitor and analyze the market all day so that you don't have to. Our service is PERFECT for:</p>
                        <ul class="list-inline">
                            <li><span class="ion-checkmark-circled"></span><p>Newbies that want the benefits of a successful trader.</p></li>
                            <li><span class="ion-checkmark-circled"></span><p> Professionals that don't have time to analyze the market.</p></li>
                            <li><span class="ion-checkmark-circled"></span><p>People that have have a tight schedule and work other jobs.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/ Signal profitable -->

<?php get_footer(); ?>