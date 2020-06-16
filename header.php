<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evatto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
<!--    <link href="--><?php //echo get_template_directory_uri(); ?><!--/assets/css/style.css" rel="stylesheet">-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <?php
                $email = get_field('email', 'option');
                $number = get_field('phone_number', 'option');
                $whatsapp = get_field('whatsapp_number', 'option');
                $facebook = get_field('facebook', 'option');
                $instagram = get_field('instagram', 'option');
                $linkedin = get_field('linkedin', 'option');
                ?>
                <i class="icofont-envelope"></i> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                <i class="icofont-phone"></i> <a href="tel:<?php echo str_replace(' ', '', $number); ?>"><?php echo $number; ?></a>
                <i class="icofont-brand-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=<?php echo str_replace(' ', '', $whatsapp); ?>"><?php echo $whatsapp; ?></a>
            </div>
            <div class="social-links">
                <?php if($facebook['show'][0] == 'Yes'): ?>
                    <a href="<?php echo $facebook['link']; ?>" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
                <?php endif; ?>
                <?php if($instagram['show'][0] == 'Yes'): ?>
                    <a href="<?php echo $instagram['link']; ?>" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
                <?php endif; ?>
                <?php if($linkedin['show'][0] == 'Yes'): ?>
                    <a href="<?php echo $linkedin['link']; ?>" class="linkedin" target="_blank"><i class="icofont-linkedin"></i></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <?php
            $logo = get_field('logo', 'option');
            $cta = get_field('menu_cta_button', 'option');
//            var_dump($logo);
            ?>
            <style>
                #header .logo img {
                    max-width: <?php echo $logo['desktop_size'] ?>px;
                }
                @media (max-width: 992px) {
                    #header .logo img {
                        max-width: <?php echo $logo['mobile_size'] ?>px;
                    }
                }
            </style>

            <a href="<?php echo home_url(); ?>" class="logo mr-auto"><img src="<?php echo $logo['logo_image'] ?>" alt="logo" class="img-fluid"></a>
            <nav class="nav-menu d-none d-lg-block">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container' => ''
                    )
                );
                ?>
            </nav>
        </div>
    </header><!-- End Header -->

    <?php
    if (!is_page_template( 'template-homepage.php' ) ) {
        ?>
    <div class=" container container-main">
<?php
    }
    ?>
