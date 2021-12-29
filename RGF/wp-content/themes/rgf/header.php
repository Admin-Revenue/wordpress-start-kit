<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/fav/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri();?>/fav/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/fav/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">
	 <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&family=Poppins:wght@200;400;700&display=swap"
        rel="stylesheet">
	 <?php wp_head();?>
    <title>RGF</title>
</head>

<body>
    <header class="header">
        <div class="wrap">
            <div class="header-container">
				<?php
					 if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
				<img class="logo" src="http://www.revenuegrowthfund.com/wp-content/uploads/2021/09/Logo.svg" alt="black-logo">
				 <div class="header__burger">
                     <span></span>
                 </div>
                <nav class="nav">
                    <ul class="nav__menu">
						<li class="nav__menu-link"><a  class="nav__menu-link" href="/about-us/">About us</a></li>
						<li class="nav__menu-link"><a  class="nav__menu-link" href="/investment-themes/">Investment Themes</a></li>
                        <li class="nav__menu-link"><a  class="nav__menu-link" href="/our-unique-difference/">Our Difference</a></li>
                        <li class="nav__menu-link"><a  class="nav__menu-link" href="/our-investment-approach/">Our Approach</a></li>
                        <li class="nav__menu-link"><a  class="nav__menu-link" href="/contact-us/">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>