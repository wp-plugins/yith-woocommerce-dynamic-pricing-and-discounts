<?php

$settings = array(

    'general' => array(

        'header'    => array(

            array(
                'name' => __( 'General Settings', 'ywdpd' ),
                'type' => 'title'
            ),

            array( 'type' => 'close' )
        ),


        'settings' => array(

            array( 'type' => 'open' ),

            array(
                'id'      => 'enabled',
                'name'    => __( 'Enable Dynamic Pricing and Discounts', 'ywdpd' ),
                'desc'    => '',
                'type'    => 'on-off',
                'std'     => 'yes'
            ),

            array(
                'id'      => 'pricing-rules',
                'name'    => __( 'Add a new rule for pricing', 'ywdpd' ),
                'desc'    => '',
                'type'    => 'options-pricing-rules',
                'deps'    => array(
                    'ids'       => 'yith-ywdpd-enable',
                    'values'    => 'yes'
                )
            ),

            array( 'type' => 'close' ),
        )
    )
);

return apply_filters( 'yith_ywdpd_panel_settings_options', $settings );