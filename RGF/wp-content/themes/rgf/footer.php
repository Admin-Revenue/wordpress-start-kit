    <footer class="footer">
        <div class="wrap">
            <div class="footer__container">
                <img src="http://www.revenuegrowthfund.com/wp-content/uploads/2021/11/Logo-R.svg" alt="logo RGF vertical" width="100px">
				<?php
// 					 if ( function_exists( 'the_custom_logo' ) ) {
// 						the_custom_logo();
// 					}
				?>
                <ul class="footer__menu-items">
                    <div>
                        <p class="footer__menu-items-title">
                            RGF
                        </p>
                        <li class="footer__menu"><a class="footer__menu" href="/about-us/">About Us</a></li>
                        <li class="footer__menu"><a class="footer__menu" href="/contact-us/">Contact Us</a></li>
					</div>
                </ul>
				<ul class="footer__menu-items">
					<div>
                        <p class="footer__menu-items-title">
                            Our Investing
                        </p>
<!--                         <li class="footer__menu"><a class="footer__menu" href="#">LPs - Interested in Investing In
                                RGF</a></li> -->
						 <li class="footer__menu"><a class="footer__menu" href="/our-value-to-you/">Our Value & ROI to You</a></li>
						<li class="footer__menu"><a class="footer__menu" href="/investment-themes/">Investment
                                Themes</a></li>
						<li class="footer__menu"><a class="footer__menu" href="/our-unique-difference/">Our
                                Difference</a></li>
                        <li class="footer__menu"><a class="footer__menu" href="/our-investment-approach/">Our
                                Approach</a></li>
                    </div>
				</ul>
				<ul class="footer__menu-items">
                <div>
                    <p class="footer__menu-items-title">
                        Contact Us
                    </p>
                    <div class="footer__location">
                        <img src="<?php echo get_template_directory_uri();?>/img/point.svg" alt="">
                        <p class="footer__text">
                            Revenue Growth Fund<br>
                            31 St. James Ave.<br>
                            Boston, MA 02116
                        </p>
                    </div>
                    <div class="footer__container-contact">
                        <div class="footer__container-contact-phohe">
                            <img src="<?php echo get_template_directory_uri();?>/img/phone.svg" alt="phone-rgf">
                            <a href="tel:6176042554" class="footer__text">(617) 604-2554</a>
                        </div>
                        <div class="footer__container-contact-phohe">
                            <img src="<?php echo get_template_directory_uri();?>/img/mail.svg" alt="mail-rgf">
                            <a href="mailto:hello@revenuegrowthfund.com"
                                class="footer__text">hello@revenuegrowthfund.com</a>
                        </div>
                    </div>
                </div>
				</ul>
            </div>
<!--             <div class="footer__container-social">
                <img src="<?php echo get_template_directory_uri();?>/img/twitter.svg" alt="twitter">
                                     <img src="<?php echo get_template_directory_uri();?>/img/facebook.svg" alt="facebook">
                <img src="<?php echo get_template_directory_uri();?>/img/linkid.svg" alt="linkid">
            </div> -->
        </div>
    </footer>
	<p class="footer-copyright">© 2021 Revenue Growth Fund, All Rights Reserved</p>
    <style>
        .footer__menu-items-title {
            position: relative;
            font-family: 'Gilroy-Bold', sans-serif;
            font-weight: normal;
            font-size: 24px;
            line-height: 36px;
            color: #FFFFFF;
			width: 100%;
			padding-bottom: 5px;
			border-bottom: 1px solid #c4c4c4;
			margin-bottom: 20px;
        }
		.footer-copyright {
			text-align: center;
			color: #fff;
			font-size: 12px;
			background: rgb(5 21 34);
			padding: 7px 0 6px 0;
			margin: 0;
		}

/*         .footer__menu-items-title:before {
            content: '';
            position: absolute;
            height: 1px;
            width: 200px;
            background-color: #C4C4C4;
            bottom: -20px;
        } */
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://www.revenuegrowthfund.com/wp-content/themes/rgf/js/script.js"></script>
    </body>

    </html>
    <?php wp_footer(); ?>