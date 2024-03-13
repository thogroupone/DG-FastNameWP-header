<?php
global $dg_options;
$theme_url = trailingslashit( get_stylesheet_directory_uri() );
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<!-- Google Tag Manager -->
<?php if( $dg_options['dg_theme_style'] == 'uw' || $dg_options['dg_theme_style'] == 'fn' ) : ?>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://sst.fastname.no/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MB5SPBG');</script>
<?php endif; ?>
<!-- End Google Tag Manager -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <base href="<?=trailingslashit($_SERVER['REQUEST_URI'])?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link type="application/opensearchdescription+xml" rel="search" href="<?=$theme_url?>osdd_<?=$dg_options['dg_theme_style']?>.xml" />
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
        <?php endif; ?>
        <link rel="preconnect" href="<?=$dg_options['dg_api_url']?>">
        <link rel="preload" href="<?=$theme_url?>css/style_<?=$dg_options['dg_theme_style']?>.css?v=<?=UW_THEME_VERSION?>" as="style">

        <link rel="stylesheet" type="text/css" href="<?=$theme_url?>css/critical_<?=$dg_options['dg_theme_style']?>.css?v=<?=DG_PLUGIN_VERSION?>">
        <!-- <script type="text/javascript" src="<?=$theme_url?>js/critical.js?v=<?=DG_PLUGIN_VERSION?>"></script> -->
        <?php wp_head(); ?>
        <?php if( $dg_options['dg_theme_style'] == 'fn' ) : ?>
                <script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.fastname.no\/","name":"FastName.no","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.fastname.no\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
                <script type='application/ld+json'>{
    "@context": "https:\/\/schema.org",
    "@type": "Organization",
    "url": "https:\/\/www.fastname.no\/",
    "sameAs": [
        "https:\/\/www.facebook.com\/fastname",
        "https:\/\/www.linkedin.com\/company\/inic-as\/",
        "https:\/\/www.youtube.com\/channel\/UCK7F594AW-DYs9fVumKDNSA",
        "https:\/\/twitter.com\/fastname"
    ],
    "@id": "https:\/\/www.fastname.no\/#organization",
    "name": "FastName.no - Digital Garden AS",
    "logo": "https:\/\/www.uniweb.no\/wp-content\/uploads\/2018\/06\/weblogo-300x71.png",
    "aggregateRating": {
        "@type": "AggregateRating",
         "ratingValue": 5,
         "reviewCount": 22
     }
}</script>
        <?php else: ?>
                <script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.uniweb.no\/","name":"Uniweb.no","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.uniweb.no\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
                <script type='application/ld+json'>{
    "@context": "https:\/\/schema.org",
    "@type": "Organization",
    "url": "https:\/\/www.uniweb.no\/",
    "sameAs": [
        "https:\/\/www.facebook.com\/UniWeb.no",
        "https:\/\/www.linkedin.com\/company\/223268",
        "https:\/\/www.youtube.com\/channel\/UCjgSgQtMjGjlPFrMXoU5Sxg",
        "https:\/\/twitter.com\/uniwebno"
    ],
    "@id": "https:\/\/www.uniweb.no\/#organization",
    "name": "UniWeb.no - Digital Garden AS",
    "logo": "https:\/\/www.uniweb.no\/wp-content\/uploads\/2016\/09\/72DPI_Uniweb-h\u00f8y-farge-slagord-1.png",
    "aggregateRating": {
           "@type": "AggregateRating",
        "ratingValue": 4.4,
        "reviewCount": 27
    }
}</script>
        <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://sst.fastname.no/ns.html?id=GTM-MB5SPBG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
        <div class="fl-page">
                <?php echo dg_notification_bar_func(); ?>
                <header>
                        <div id="logobar" class="clearfix">
                                <div id="logo"><a href="<?php echo home_url(); ?>"><img src="/wp-content/uploads/2022/10/Fastname-logo.svg"></a></div>
                                <div id="header-tools">
                                        <?=do_shortcode( '[dg_ds_form button-text="" icon="true"]' )?>
                                        <a href="<?=$dg_options['dg_cart_url']?>" class="header-button" aria-label="Handlekurv">
                                                <svg class="dg-icon" viewbox="0 0 32 32">
                                                        <use xlink:href="<?=$theme_url?>assets/sprite_<?=$dg_options['dg_theme_style']?>.svg?v=<?=DG_PLUGIN_VERSION?>#icon-cart"></use>
                                                </svg>
                                                <span class="dg-header-tools-label">Handlekurv</span>
                                                        <?php
                                                                $visible = '';
                                                                $num = '';
                                                                if( isset( $_COOKIE['dg_cart_num'] ) && is_numeric( $_COOKIE['dg_cart_num'] ) && $_COOKIE['dg_cart_num'] > 0 ) {
                                                                        $visible = ' visible';
                                                                        $num = $_COOKIE['dg_cart_num'];
                                                                }
                                                        ?>
                                                        <span class="dg-cart-num<?=$visible?>"><?=$num?></span>
                                                </span>
                                        </a>
                                        <div id="hamburger">
                                                <svg class="dg-icon" viewbox="0 0 32 32">
                                                        <use xlink:href="<?=$theme_url?>assets/sprite_<?=$dg_options['dg_theme_style']?>.svg?v=<?=DG_PLUGIN_VERSION?>#icon-menu"></use>
                                                </svg>
                                        </div>
                                </div>
                        </div>
                        <div id="navbar">
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'navbar-left', 'container_class' => 'main_nav_container' ) ); ?>
                                <?php wp_nav_menu( array( 'theme_location' => 'customer-menu', 'container_id' => 'navbar-right', 'container_class' => 'main_nav_container' ) ); ?>
                        </div>
                </header>

                <nav id="fullscreen-nav" class="defer">
                        <svg class="dg-icon icon--white" viewbox="0 0 32 32">
                                <use xlink:href="<?=$theme_url?>assets/sprite_<?=$dg_options['dg_theme_style']?>.svg?v=<?=DG_PLUGIN_VERSION?>#icon-cross"></use>
                        </svg>
                        <div id="fullscreen-wrapper">
                                <?=do_shortcode( '[dg_ds_form button-text="" icon="true"]' )?>
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                                <?php wp_nav_menu( array( 'theme_location' => 'customer-menu' ) ); ?>
                        </div>