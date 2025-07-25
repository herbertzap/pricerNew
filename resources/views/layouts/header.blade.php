<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="{{ get_bloginfo('charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="{{ get_stylesheet_directory_uri() }}/assets/css/general.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
<header id="masthead" class="site-header">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <div class="container">
                    <a class="navbar-brand" href="{{ home_url('/') }}">
                        <img src="{{ home_url('/') }}/content/uploads/2025/07/logo-pricer.png" alt="Pricer Logo" height="40">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        {!! wp_nav_menu([
                            'theme_location' => 'main_menu',
                            'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                            'container' => false,
                            'echo' => false
                        ]) !!}
                        <div class="d-flex align-items-center ms-lg-3 header-social-icons">
                            <a href="https://www.facebook.com/Pricer-CHILE-102149522418008 target="_blank" aria-label="Facebook" class="btn btn-link p-0 me-2 social-icon">
                                <!-- Facebook SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.25 236.25" width="28" height="28"><rect fill="#1a212e" width="236.25" height="236.25"/><path fill="#f4efe9" d="M153.53,52.42c-13.73.52-28.89-2.66-40.12,7.14-12.51,10.91-9.15,27.74-9.57,42.56h-21.11v24.04h20.63s.49.45.49.49v61.55h24.69v-61.55s.45-.49.49-.49h23.55v-24.04h-24.04v-16.73c0-.91.52-3.39.83-4.37.77-2.5,2.48-4.21,4.93-5.14,1.13-.43,4.01-1.05,5.12-1.05h14.13v-22.41Z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/pricerchile/" target="_blank" aria-label="Instagram" class="btn btn-link p-0 me-2 social-icon">
                                <!-- Instagram SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.25 236.25" width="28" height="28"><rect fill="#1a212e" width="236.25" height="236.25"/><path fill="#f4efe9" d="M63.39,175.16c-10.07-10.01-10.57-21.83-10.91-35.24-.39-15.27-.78-32.01.16-47.22,1.46-23.73,14.36-36.53,38.08-37.94,15.23-.9,31.93-.55,47.22-.15,12.11.32,23.72.72,33.25,9.2,11.67,10.39,12.22,22.42,12.58,37.12.37,15.19.77,31.77-.16,46.89-1.46,23.75-14.36,36.52-38.08,37.94-15.19.91-31.82.54-47.06.15-13.31-.34-25.09-.82-35.08-10.75ZM101.31,66.34c-8.81.18-19.98-.07-27.27,5.48-10.06,7.66-9.45,19.48-9.72,30.93-.26,11.59-.26,23.28,0,34.87.21,9.39-.32,20.3,6.24,27.82,7.86,9.01,19.07,8.38,30.04,8.63,11.7.27,23.5.27,35.2,0,10.92-.25,22.07.33,29.88-8.63,6.58-7.55,6.03-18.42,6.24-27.82.32-14.17.67-29.32-.15-43.44-1.06-18.36-8.78-26.43-27.24-27.55-13.91-.85-29.23-.57-43.23-.28Z"/><path fill="#f4efe9" d="M117.94,86.4c26-.12,42.52,28.14,29.51,50.75-12.95,22.51-45.69,22.51-58.63,0-12.9-22.44,3.31-50.63,29.12-50.75ZM115.96,98.42c-15.47,1.26-24.54,18.74-17.11,32.31,8.34,15.24,30.45,15.25,38.62-.11,8.33-15.65-4.05-33.63-21.51-32.21Z"/><path fill="#f4efe9" d="M158.88,90.75c-7.4,7.4-18.71-4.06-11.11-11.36,7.43-7.15,18.45,4.03,11.11,11.36Z"/></svg>
                            </a>
                            <a href="https://www.linkedin.com/company/pricer" target="_blank" aria-label="LinkedIn" class="btn btn-link p-0 me-2 social-icon">
                                <!-- LinkedIn SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.25 236.25" width="28" height="28"><rect fill="#1a212e" width="236.25" height="236.25"/><path fill="#f4efe9" d="M73.46,59.53c-14.09,1.69-15.23,23.44-.51,26.27,19.91,3.83,21.7-28.81.51-26.27ZM173.85,171.11v-48.91c-1.18-9.93-5.31-18.28-14.16-23.31-12.59-7.14-29.9-3.2-38.64,8.09v-10.31h-21.37v74.43h22.63v-41.12c0-1.78,1.69-5.81,2.66-7.4,4.59-7.48,17.61-8.39,23.12-1.53,1.14,1.42,2.89,5.14,2.89,6.92v43.13h22.88ZM87.1,96.68h-23.14v74.43h23.14v-74.43Z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
    </header><!-- #masthead -->