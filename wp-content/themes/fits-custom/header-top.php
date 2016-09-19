<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- ==============================================
Internet Explorer If's
=============================================== -->
<!--[if lt IE 9]>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->

<!--[if lt IE 6]>
<script type="text/javascript">
window.location = "http://windows.microsoft.com/en-GB/internet-explorer/ie-11-worldwide-languages/";
</script>
<![endif]-->
<!-- ==============================================
/ Internet Explorer If's
=============================================== -->

<!-- ==============================================
Titles and Meta Tags
=============================================== -->

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
<!-- ==============================================
/ Titles and Meta Tags
=============================================== -->

<!-- ==============================================
CSS Elements
=============================================== -->
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/normalize/normalize.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/animate/animate.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/ionicons-2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/jquery/jquery-ui.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/colorbox/colorbox.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/prettify-css/prettify.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/print/print.css" media="print">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- ==============================================
/ CSS Elements
=============================================== -->