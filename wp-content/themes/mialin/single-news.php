<?php get_header(); ?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<h2><?php the_title(); ?></h2>
				<?php 
				while ( have_posts() ) : the_post();
				    the_content();
				endwhile; 
				?>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="right-nav">
					<div class="heading"> 
					  <h4>Навигация</h4>
					</div>
					<?php echo do_shortcode('[product_categories_list]'); ?>
				</div>
			</div>
		</div>
	</div>	
</div>

<?php get_footer(); ?>