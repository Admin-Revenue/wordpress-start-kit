<?php
/**
 * Template Name: Form
 */
get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/rgf/css/form.css" media="all">
<div class="form-invest">
	<div class="teamplate-content wrap">
		<?php echo do_shortcode('[ninja_form id='.get_field('form_shortcode_ID').']') ?>
	</div>
</div>
<style>
	.form-invest {
		background: url(http://www.revenuegrowthfund.com/wp-content/uploads/2021/09/Group-89.jpg) center top/cover no-repeat;
		padding-top: 300px;
		padding-bottom: 200px;
	}
	.nf-form-cont {
		background: #fff;
		max-width: 720px;
		margin: 0 auto;
		padding: 50px;
	}
</style>
<?php get_footer();?>