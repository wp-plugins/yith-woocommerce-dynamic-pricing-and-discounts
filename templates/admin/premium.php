<style>
    body{
        overflow-x: hidden;
    }

    .section{
        margin-left: -20px;
        margin-right: -20px;
        font-family: "Raleway",san-serif;
    }
    .section h1{
        text-align: center;
        text-transform: uppercase;
        color: #808a97;
        font-size: 35px;
        font-weight: 700;
        line-height: normal;
        display: inline-block;
        width: 100%;
        margin: 50px 0 0;
    }
    .section ul{
        list-style-type: disc;
        padding-left: 15px;
    }
    .section:nth-child(even){
        background-color: #fff;
    }
    .section:nth-child(odd){
        background-color: #f1f1f1;
    }
    .section .section-title img{
        display: table-cell;
        vertical-align: middle;
        width: auto;
        margin-right: 15px;
    }
    .section h2,
    .section h3 {
        display: inline-block;
        vertical-align: middle;
        padding: 0;
        font-size: 24px;
        font-weight: 700;
        color: #808a97;
        text-transform: uppercase;
    }

    .section .section-title h2{
        display: table-cell;
        vertical-align: middle;
        line-height: 25px;
    }

    .section-title{
        display: table;
    }

    .section h3 {
        font-size: 14px;
        line-height: 28px;
        margin-bottom: 0;
        display: block;
    }

    .section p{
        font-size: 13px;
        margin: 25px 0;
    }
    .section ul li{
        margin-bottom: 4px;
    }
    .landing-container{
        max-width: 750px;
        margin-left: auto;
        margin-right: auto;
        padding: 50px 0 30px;
    }
    .landing-container:after{
        display: block;
        clear: both;
        content: '';
    }
    .landing-container .col-1,
    .landing-container .col-2{
        float: left;
        box-sizing: border-box;
        padding: 0 15px;
    }
    .landing-container .col-1 img{
        width: 100%;
    }
    .landing-container .col-1{
        width: 55%;
    }
    .landing-container .col-2{
        width: 45%;
    }
    .premium-cta{
        background-color: #808a97;
        color: #fff;
        border-radius: 6px;
        padding: 20px 15px;
    }
    .premium-cta:after{
        content: '';
        display: block;
        clear: both;
    }
    .premium-cta p{
        margin: 7px 0;
        font-size: 14px;
        font-weight: 500;
        display: inline-block;
        width: 60%;
    }
    .premium-cta a.button{
        border-radius: 6px;
        height: 60px;
        float: right;
        background: url(<?php echo YITH_YWDPD_URL?>assets/images/upgrade.png) #ff643f no-repeat 13px 13px;
        border-color: #ff643f;
        box-shadow: none;
        outline: none;
        color: #fff;
        position: relative;
        padding: 9px 50px 9px 70px;
    }
    .premium-cta a.button:hover,
    .premium-cta a.button:active,
    .premium-cta a.button:focus{
        color: #fff;
        background: url(<?php echo YITH_YWDPD_URL?>assets/images/upgrade.png) #971d00 no-repeat 13px 13px;
        border-color: #971d00;
        box-shadow: none;
        outline: none;
    }
    .premium-cta a.button:focus{
        top: 1px;
    }
    .premium-cta a.button span{
        line-height: 13px;
    }
    .premium-cta a.button .highlight{
        display: block;
        font-size: 20px;
        font-weight: 700;
        line-height: 20px;
    }
    .premium-cta .highlight{
        text-transform: uppercase;
        background: none;
        font-weight: 800;
        color: #fff;
    }

    @media (max-width: 768px) {
        .section{margin: 0}
        .premium-cta p{
            width: 100%;
        }
        .premium-cta{
            text-align: center;
        }
        .premium-cta a.button{
            float: none;
        }
    }

    @media (max-width: 480px){
        .wrap{
            margin-right: 0;
        }
        .section{
            margin: 0;
        }
        .landing-container .col-1,
        .landing-container .col-2{
            width: 100%;
            padding: 0 15px;
        }
        .section-odd .col-1 {
            float: left;
            margin-right: -100%;
        }
        .section-odd .col-2 {
            float: right;
            margin-top: 65%;
        }
    }

    @media (max-width: 320px){
        .premium-cta a.button{
            padding: 9px 20px 9px 70px;
        }

        .section .section-title img{
            display: none;
        }
    }
</style>
<div class="landing">
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Dynamic Pricing and Discounts%2$s to benefit from all features!','ywdpd'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','ywdpd');?></span>
                    <span><?php _e('to the premium version','ywdpd');?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/01-bg.png) no-repeat #fff; background-position: 85% 75%">
        <h1><?php _e('Premium Features','ywdpd');?></h1>
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/01.png" alt="discounts type" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL ?>assets/images/01-icon.png" alt="icon 01"/>
                    <h2><?php _e('TWO KINDS OF DISCOUNTS (PRODUCT AND CART) ','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('There are many discount combinations you can create with the premium version of the plugin with endless options that let you create favorable and tempting purchase conditions for your users.
                    There are two main kinds of discount: %1$sproduct%2$s one and %1$scart%2$s one.%3$s
                    With the first one, you can configure the discount rules for the products available in the cart,
                    while the second offers to your user a discount on the overall amount of the cart.', 'ywdpd'), '<b>', '</b>','<br>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/02-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL ?>assets/images/02-icon.png" alt="icon 02" />
                    <h2><?php _e('SELECTION OF THE PRODUCT TO DISCOUNT','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('An advanced configuration will let you manage carefully the %1$svalidity%2$s of the discount. Offer the deal only for a small list
                    of products you can choose, or apply it to different product categories of your store.
                    Support purchases with a precise management of the plugin!', 'ywdpd'), '<b>', '</b>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/02.png" alt="product to discount" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/03-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/03.png" alt="Users list" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL ?>assets/images/03-icon.png" alt="icon 03" />
                    <h2><?php _e( 'CHOOSE USERS INVOLVED','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('A tailored discount for a particular user! You can do this too with the premium version of the plugin.
                    With the %1$s"User Status"%2$s option, you can limit the discount to specific groups of users indicating the names,
                     or specifying the requested user roles to benefit from the discount.', 'ywdpd'), '<b>', '</b>','<br>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/04-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL ?>assets/images/04-icon.png" alt="icon 04" />
                    <h2><?php _e('SCHEDULE DISCOUNTS','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Plan your future discounts and %1$sset the time span in which make them available%2$s: the automatic process
                    will make your shop even more dynamic to the eyes of your users', 'ywdpd'), '<b>', '</b>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/04.png" alt="Schedule discounts" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/05-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/05.png" alt="Combined discounts" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL?>assets/images/05-icon.png" alt="icon 05" />
                    <h2><?php _e('COMBINED DISCOUNTS','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Does one offer exclude another one? Maybe, but it\'s up to you!
                    %1$sDecide if a discount rule can be applied with others%2$s, so that users can take advantage of further facilitations for their orders. ', 'ywdpd'), '<b>', '</b>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/06-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL ?>assets/images/06-icon.png" alt="icon 06" />
                    <h2><?php _e('QUANTITY DISCOUNTS','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('The premium version of the plugin lets you create different discounts based on the available quantity of a product in the cart.
                    Choose the %1$sminimum%2$s and the %1$smaximum%2$s amount, and give to users the freedom to benefit from different discounts,
                    encouraging them to increase the number of items in the cart to get a better discount.', 'ywdpd'), '<b>', '</b>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/06.png" alt="quantity discounts" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/07-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/07.png" alt="Price table" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL?>assets/images/07-icon.png" alt="icon 07" />
                    <h2><?php _e('PRICE TABLE','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('A recap of the discounts for a product to inform users about the actual value of the product.
                    Go to the settings panel of the plugin and select where you want to show the table in the product detail page.%3$s
                    %1$sAn additional tool to get to your customers.%2$s', 'ywdpd'), '<b>', '</b>','<br>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/08-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL ?>assets/images/08-icon.png" alt="icon 06" />
                    <h2><?php _e('THREE DISCOUNT MODES','ywdpd');?></h2>
                </div>
                <p>
                    <?php _e('There are three discount modes for your products.','ywdpd');?>
                </p>
                <ul>
                    <li><?php echo sprintf( __('By %1$spercentage%2$s: the price of the product receives a percentage of discount.','ywdpd'),'<b>','</b>' ); ?></li>
                    <li><?php echo sprintf( __('By %1$samount%2$s: the amount you set is deducted from the price.',''),'<b>','</b>') ?></li>
                    <li><?php echo sprintf( __('By %1$sfixed value%2$s: it doesn\'t matter the WooCommerce price, the products influenced by the discount rule will have the same value you have set for this discount.','ywdpd'),'<b>','</b>' ) ?></li>
                </ul>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/08.png" alt="Discount modes" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/09-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/09.png" alt="Options" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL?>assets/images/09-icon.png" alt="icon 09" />
                    <h2><?php _e('APPLY TO / APPLY ADJUSTMENT TO','ywdpd');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('With the two options named "Apply to" and "Apply adjustment to" you can configure your discounts selecting the products
                    users need to have in the cart to apply the discount to the selected products for the "Apply adjustment to" option.
                    A strategic technique to %1$sencourage your users to purchase more products%2$s on your e-commerce.', 'ywdpd'), '<b>', '</b>','<br>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWDPD_URL ?>assets/images/10-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWDPD_URL ?>assets/images/10-icon.png" alt="icon 10" />
                    <h2><?php _e('CART COUPON','ywdpd');?></h2>
                </div>
                <p>
                    <?php _e('For the discounts applied to the cart, the discounted value will be applied as a coupon directly in the checkout step.','ywdpd');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWDPD_URL ?>assets/images/10.png" alt="Coupon" />
            </div>
        </div>
    </div>
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Dynamic Pricing and Discounts%2$s to benefit from all features!','ywdpd'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','ywdpd');?></span>
                    <span><?php _e('to the premium version','ywdpd');?></span>
                </a>
            </div>
        </div>
    </div>
</div>