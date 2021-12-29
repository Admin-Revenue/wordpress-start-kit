<?php
/**
 * Template Name: Front Page
 */
get_header();?>
    <section class="primery">
        <div class="wrap">
			<div class="primery-wrap">
				<h1 class="primery__title"><?php the_field('main_title');?></h1>
				<p class="primery__title-desc">
					<?php the_field('main_description');?>
				</p>
				<p class="text-white">
					<?php the_field('second_main_description');?>
				</p>
				<p class="desc-main">
					<?php the_field('third_main_description');?>
			</p>
			</div>
            <div class="primery__block-bottom">
                <a href="/investment-themes/" class="primery__block-bottom-item">Investment Themes
                </a>
                <a href="/our-investment-approach/" class="primery__block-bottom-item primery__block-bottom-item2">Our Approach
                </a>
                <a href="/our-unique-difference/" class="primery__block-bottom-item">The Difference
                </a>
            </div>
			<div id="down">
				<a href="#about">
				<img class="scroll-down lazyloaded" src="/wp-content/uploads/2021/09/arrow-down-main.svg" alt="arrow-down" data-ll-status="loaded">
<!-- <noscript><img class="scroll-down" src="https://www.revenuegrowthfund.com/wp-content/uploads/2021/09/arrow-down-main.svg" alt="arrow-down"></noscript> -->
			</a>
			</div>
        </div>
    </section>

    <section class="about-us" id="about">
        <div class="wrap wrap-content">
            <div class="about-us__container">
                <div class="about-us__container-content">
                    <h2 class="title-black">
                        About Us
                    </h2>
                    <p class="about-us__container-content-desc">
                        <?php the_field('about_us_content');?>
                    </p>
                </div>
            </div>
		</div>
    </section>

    <section class="difference">
        <div class="wrap wrap-content">
            <div class="difference__container">
                <div class="difference__container-left">
                    <h3 class="title-white">
                        Our difference
                    </h3>
                    <p class="difference__container-left-desc">
                       <?php the_field('our_difference_content');?>
                    </p>
                    <a href="/our-unique-difference/" class="btn btn-white">
						Learn more <svg class="btn-white-arrow" width="9" height="17" viewBox="0 0 9 17" fill="#fff"  xmlns="http://www.w3.org/2000/svg">
<path d="M8.15751 7.76135L1.02064 0.366479C0.786805 0.124336 0.408226 0.124743 0.174787 0.367731C-0.0584722 0.610688 -0.0578694 1.00426 0.175992 1.24659L6.88806 8.20133L0.175751 15.156C-0.0580805 15.3984 -0.0586832 15.7917 0.174545 16.0347C0.291567 16.1565 0.444873 16.2174 0.598179 16.2174C0.751093 16.2174 0.903796 16.1569 1.02061 16.036L8.15751 8.64127C8.27014 8.52485 8.33333 8.36641 8.33333 8.20133C8.33333 8.03625 8.26995 7.87799 8.15751 7.76135Z" />
</svg>

					</a>
                </div>
            </div>
        </div>
    </section>

    <section class="our-approach">
        <div class="wrap wrap-content">
            <div class="our-approach__container">
                <div class="about-us__container-content">
                    <h2 class="title-black">
                        Our Approach
                    </h2>
                    <div class="about-us__container-content-desc our-approach-desc">
                        
                            <?php the_field('our_approach_content_left',false,false);?>
                        
                    </div>
					<a href="/our-investment-approach/" class="btn btn-black">
						Learn more <svg class="btn-white-arrow" width="9" height="17" viewBox="0 0 9 17" fill="#051C2C"  xmlns="http://www.w3.org/2000/svg">
<path d="M8.15751 7.76135L1.02064 0.366479C0.786805 0.124336 0.408226 0.124743 0.174787 0.367731C-0.0584722 0.610688 -0.0578694 1.00426 0.175992 1.24659L6.88806 8.20133L0.175751 15.156C-0.0580805 15.3984 -0.0586832 15.7917 0.174545 16.0347C0.291567 16.1565 0.444873 16.2174 0.598179 16.2174C0.751093 16.2174 0.903796 16.1569 1.02061 16.036L8.15751 8.64127C8.27014 8.52485 8.33333 8.36641 8.33333 8.20133C8.33333 8.03625 8.26995 7.87799 8.15751 7.76135Z" />
					</a>
                </div>
                <img class="our-approach__container-img" src="<?php echo the_field('our_approach_img');?>" alt="approach">
            </div>
		</div>
    </section>
		<style>
			.primery__title {
				margin-top: 0px;
			}
			.our-approach__container-img {
				height: 553px;
			}
		</style>
		<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<?php get_footer();?>