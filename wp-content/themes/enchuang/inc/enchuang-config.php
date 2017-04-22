<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "enchuang_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
       // 'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => pll__( 'Theme Settings'),
        'page_title'           => pll__( 'Theme Settings'),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        'templates_path' => dirname(__FILE__).'/panel',
        
     'hide_reset' => true, 
       // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

     Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


  
    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

// start  logo  section
    Redux::setSection( $opt_name, array(
        'title'      => pll__( '合作伙伴' ),
        'icon'         => 'el el-picture',
        'fields'     => array(
        
               array(
                'id'       => 'partners',
                'type'     => 'slides',
                'title'    => pll__( '合作伙伴' ),
                'placeholder' => array(
                  'title'           => pll__('标题'),
                  'description'     => pll__('描述'),
                  'url'             => pll__('网址'),
                 )
            )

        )
    ) );

 //end of header setion

    // -> START Footer Fields

    Redux::setSection( $opt_name, array(
        'title'      => pll__( '页脚'),
        'icon'         => 'el-icon-cogs',
        'fields'     => array(
           
           array(
                'id'       => 'address',
                'type'     => 'textarea',
                'title'    => pll__( '地址' ),
                'default'  => '',
            ),
           
           array(
                'id'       => 'cellphone',
                'type'     => 'text',
                'title'    => pll__( '电话' ),
                'default'  => '',
            ),
           
           array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => pll__( '邮箱' ),
                'default'  => '',
            ),

           array(
                'id'       => 'copyright',
                'type'     => 'text',
                'title'    => pll__( '版权' ),
                'default'  => '',
            ),

           array(
                'id'       => 'icp',
                'type'     => 'text',
                'title'    => pll__( 'icp备案号' ),
                'default'  => '',
            ),



            array(
                'id'       => 'footer_logo',
                'type'     => 'media',
                'title'    => pll__( '底部logo' ),
                'url'      => true,
                ),
        
            array(
                'id'       => 'footer_logo_desc',
                'type'     => 'textarea',
                'title'    => pll__( '底部logo描述' ),
                'default'  => '',
            )

        )
    ) );
// end of general section








// start  social  section
/*     Redux::setSection( $opt_name, array(
         'title'      => __( 'Social', 'enchuang' ),
         'icon'         => 'el el-myspace',
         'fields'     => array(
             array(
                 'id'       => 'flickr',
                 'type'     => 'text',
                 'title'    => __( 'Your flickr url', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'linkedin',
                 'type'     => 'text',
                 'title'    => __( 'Your linkedin url', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'sina',
                 'type'     => 'text',
                 'title'    => __( 'Your sina url', 'enchuang' ),
             ),

//             array(
//                 'id'       => 'wechat',
//                 'type'     => 'text',
//                 'title'    => __( 'Your wechat url', 'enchuang' ),
//             ),
//

             array(
                 'id'       => 'twitter',
                 'type'     => 'text',
                 'title'    => __( 'Your twitter url', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'youtube',
                 'type'     => 'text',
                 'title'    => __( 'Your youtube url', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'facebook',
                 'type'     => 'text',
                 'title'    => __( 'Your facebook url', 'enchuang' ),
             ),
 
         )
     ) ); */
 
 //end of social setion

     /*
// start  Homepage  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Homepage', 'enchuang' ),
         'icon'         => 'el el-home',
         'fields'     => array(
             array(
                 'id'       => 'background_pic',
                 'type'     => 'media',
                 'title'    => __( 'Upload background picture for first screen of homepage', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'strong_title',
                 'type'     => 'text',
                 'title'    => __( 'Strong title for first screen of homepage', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'small_title',
                 'type'     => 'text',
                 'title'    => __( 'Small title for first screen of homepage', 'enchuang' ),
             ),
 
         )
     ) );
 
     //end of homepage setion */

/*
// start  Governance  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Governance page', 'enchuang' ),
         'icon'         => 'el el-screen',
         'fields'     => array(
             array(
                 'id'       => 'governance_bg',
                 'type'     => 'media',
                 'title'    => __( 'Background picture ', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'governance_title',
                 'type'     => 'text',
                 'title'    => __( 'Title', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'governance_desc',
                 'type'     => 'textarea',
                 'title'    => __( 'Description', 'enchuang' ),
             ),
 
         )
     ) );
 
 //end of governance setion

// start  Partners  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Partners page', 'enchuang' ),
         'icon'         => 'el el-screen',
         'fields'     => array(
             array(
                 'id'       => 'partner_bg',
                 'type'     => 'media',
                 'title'    => __( 'Background picture', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'partner_title',
                 'type'     => 'text',
                 'title'    => __( 'Title', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'partner_desc',
                 'type'     => 'textarea',
                 'title'    => __( 'Description', 'enchuang' ),
             ),
 
         )
     ) );
 
 //end of partners setion

// start  mission  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Mission page', 'enchuang' ),
         'icon'         => 'el el-screen',
         'fields'     => array(
             array(
                 'id'       => 'mission_bg',
                 'type'     => 'media',
                 'title'    => __( 'Background picture', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'mission_title',
                 'type'     => 'text',
                 'title'    => __( 'Title', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'mission_desc',
                 'type'     => 'textarea',
                 'title'    => __( 'Description', 'enchuang' ),
             ),
 
         )
     ) );
 
 //end of mission setion


 
// start  jobs  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Jobs page', 'enchuang' ),
         'icon'         => 'el el-screen',
         'fields'     => array(
             array(
                 'id'       => 'job_bg',
                 'type'     => 'media',
                 'title'    => __( 'Background picture', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'job_title',
                 'type'     => 'text',
                 'title'    => __( 'Title', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'job_desc',
                 'type'     => 'textarea',
                 'title'    => __( 'Description', 'enchuang' ),
             ),
 
         )
     ) );
 
 //end of jobs setion


// start  donors  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Donors page', 'enchuang' ),
         'icon'         => 'el el-screen',
         'fields'     => array(
             array(
                 'id'       => 'donor_bg',
                 'type'     => 'media',
                 'title'    => __( 'Background picture', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'donor_title',
                 'type'     => 'text',
                 'title'    => __( 'Title', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'donor_desc',
                 'type'     => 'textarea',
                 'title'    => __( 'Description', 'enchuang' ),
             ),
 
         )
     ) );
 
 //end of donors setion


// start  strategy  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Mission & Strategy page', 'enchuang' ),
         'icon'         => 'el el-screen',
         'fields'     => array(
             array(
                 'id'       => 'strategy_bg',
                 'type'     => 'media',
                 'title'    => __( 'Background picture', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'strategy_title',
                 'type'     => 'text',
                 'title'    => __( 'Title', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'strategy_desc',
                 'type'     => 'textarea',
                 'title'    => __( 'Description', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'strategy_left_detail',
                 'type'     => 'textarea',
                 'title'    => __( 'Details on left side', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'strategy_right_detail',
                 'type'     => 'textarea',
                 'title'    => __( 'Details on right side', 'enchuang' ),
             ),
 
         )
     ) );
 
 //end of strategy  setion

// start  grogrammes  section
     Redux::setSection( $opt_name, array(
         'title'      => __( 'Programmes page', 'enchuang' ),
         'icon'         => 'el el-screen',
         'fields'     => array(
             array(
                 'id'       => 'programme_bg',
                 'type'     => 'media',
                 'title'    => __( 'Background picture', 'enchuang' ),
                 'url'      => true,
                 'description'      => 'Recommended logo size: ',
             ),
 
             array(
                 'id'       => 'programme_title',
                 'type'     => 'text',
                 'title'    => __( 'Title', 'enchuang' ),
             ),
 
             array(
                 'id'       => 'programme_desc',
                 'type'     => 'textarea',
                 'title'    => __( 'Description', 'enchuang' ),
             ),
 
         )
     ) );
 
 //end of donors setion
 */

    /*
     * <--- END SECTIONS
     */


