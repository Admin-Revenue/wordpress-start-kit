<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/rgf/css/form.css" media="all">
<section class="contact-us" id="contact-us">
    <div class="wrap wrap-contact">
        <div class="left">
            <div class="contact-us__container-content">
                <h2 class="title-black">
                    <?php the_title();?>
                </h2>
                <img src="http://www.revenuegrowthfund.com/wp-content/uploads/2021/09/image-7.jpg" alt="">
                <div class="contact-bottom">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.6056102337334!2d-71.07377908426267!3d42.35093117918746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a74915caeeb%3A0xf6df3bd9cc27d568!2s31%20St%20James%20Ave%2C%20Boston%2C%20MA%2002116!5e0!3m2!1sen!2sus!4v1632849608022!5m2!1sen!2sus"
                        width="47%" height="255" style="border:0;" allowfullscreen="" loading="lazy">
					</iframe>
                    <div class="contact-bottom__left">

                        <div class="footer__location contact-footer__location">

                            <p class="footer__text  contact-footer__text contact-bottom__text">
                                Revenue Growth Fund,<br>
                                31 St. James Ave.<br>
                                Boston, MA 02116
                            </p>
                        </div>
                        <div class="footer__container-contact">
                            <div class="footer__container-contact-phohe contact-footer__text">

                                <a href="tel:6176042554" class="footer__text contact-bottom__text">(617) 604-2554</a>
                            </div>
                            <div class="footer__container-contact-phohe contact-footer__text">

                                <a href="mailto:hello@revenuegrowthfund.com"
                                    class="footer__text contact-bottom__text">hello@revenuegrowthfund.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <?php echo do_shortcode('[ninja_form id='.get_field('form_shortcode_ID').']') ?>
        </div>
    </div>
</section>
<style>
    .contact-bottom__left {
        width: 47%;
    }

    .header {
        background: #051C2C;
        border-bottom: none;
    }
	
	.header>.wrap {
		 border-bottom: none;
	}
	
    .contact-footer__location {
        align-items: center;
    }

    .contact-footer__text {
        margin-bottom: 24px;
    }

    .contact-bottom__text {
        color: #051C2C;
        font-size: 22px;
    }

    #contact-us {
        padding: 250px 0;
        background: #fff;
    }

    .wrap-contact {
        display: flex;
        justify-content: space-between;
    }

    .left,
    .right {
        flex-basis: 47%;
    }
	.btn-form {
			border-radius: 0 !important;
	}
	#nf-field-4:hover {
	background: #051C2C !important;
	color: #fff !important;
}
	.nf-form-content label {
		font-size: 24px;
	}

	@media screen and (max-width: 1200px) {
		.wrap-contact {
			flex-direction: center; 
			flex-direction: column;
		}
		.right {
			margin-top: 150px;
		}
		.contact-us__container-content>img {
			width: 100%;
		}
	}
	@media screen and (max-width: 768px) {
		.contact-bottom {
			flex-direction: column;
		}
		iframe, .contact-bottom__left {
			width: 100% !important;
		}
		.contact-bottom__left {
			margin-top: 35px;
		}
	}
	@media screen and (max-width: 576px) {
		#contact-us {
			padding-top: 150px;
		}
	}
</style>
<?php get_footer();?>