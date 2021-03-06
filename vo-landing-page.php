<?php
/**
 * Template Name: VO Landing Page
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * 
 *
 * @package Vanstone Online
 * @subpackage vanston online theme
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./scss/custom.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container-fluid mb-10">
            <div class="container-xxl offset-1">
                <header class="">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav class="navbar navbar-expand-lg navbar-light " role="navigation"> 
                            <div class="navbar-header">
                            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1>
                            <a href="#" class="navbar-brand"><img class="logo" src="./images/Vanstone Online.svg" alt="Vanstone Online" /></a>
                            </div>
                            <button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#homeMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                            <div class="collapse navbar-collapse" id="homeMenu">
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                                <a href="#" class="nav-item nav-link active" aria-current="page">Home</a>
                                <a href="#" class="nav-item nav-link">About</a>
                                <a href="#" class="nav-item nav-link">Docs</a>
                                <button type="button" class="btn btn-orange m-1" href="#">Login</button>
                            </div>
                        </nav>
                    </div>
                </header>
                <main>
                    <h1 class="display-5">WordPress Development <br>& Web Design</h1>
                    <div class="row icons mt-10 mb-10">
                        <div class="col-md-3 m-3 icon">
                            <div class="row">
                                <img src="./images/figma.svg" alt="Figma" />
                                <div class="icon--info">
                                    <p class="col icon-top">Figma</p>
                                    <p class="col icon-bottom">DRAW</p>
                                </div>
                            </div>
                        </div> <!--enc col icon -->
                        <div class="col-md-3 m-3 icon">
                            <div class="row">
                                <img src="./images/BootStrap.svg" alt="Bootstrap" />
                                <div class="icon--info">
                                    <p class="col icon-top">Bootstrap</p>
                                    <p class="col icon-bottom">SCSS</p>
                                </div>
                            </div>
                        </div>  <!--enc col icon -->
                        <div class="col-md-3 m-3 icon">
                            <div class="row">
                                <img src="./images/WordPress.svg" class="img-fluid" alt="WordPress" />
                                <div class="icon--info">
                                    <p class="col icon-top">WordPress</p>
                                    <p class="col icon-bottom">CMS</p>
                                </div>
                            </div>
                        </div>  <!--enc col icon -->
                    </div>
                </main>
                <footer class="mt-10 p-3 row">
                    <div class="col-sm media m-md-4 feature my-auto">
                        <img src="./images/theme.jpg" alt="Custom Themes" class="m-1 rounded" />
                        <div class="media-body m-1 feature--info">
                            <p>Custom Themes</p>
                        </div>
                    </div>
                    <div class="col-sm media m-md-4 feature my-auto">
                        <img src="./images/plugin.jpg" alt="Custom Themes" class="m-1 rounded" />
                        <div class="media-body m-1 feature--info ">
                            <p>Custom Plugins</p>
                        </div>
                    </div>
                    <div class="col-sm m-3 p-1">
                        <button class="btn btn-primary m-1" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Connect
                        </button>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body text-white bg-dark mb-3">
                                <div class="row justify-content-around">
                                    <a href="#"><span class="iconify" data-inline="false" data-icon="ic:baseline-alternate-email" style="font-size: 24px;"></span></a>
                                    <a href="#"><span class="iconify" data-inline="false" data-icon="jam:twitter-circle" style="font-size: 24px;"></span> </a>
                                    <a href="#"><span class="iconify" data-inline="false" data-icon="akar-icons:instagram-fill" style="font-size: 24px;"></span></a>
                                    <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:github-filled" style="font-size: 24px;"></span></a>
                                    <a href="#"><span class="iconify" data-inline="false" data-icon="jam:facebook-circle" style="font-size: 24px;"></span></a>
                                    <a href="#"><span class="iconify" data-inline="false" data-icon="typcn:social-linkedin-circular" style="font-size: 26px;"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <?php include('footer-scripts.php'); ?>
    </body>
</html>