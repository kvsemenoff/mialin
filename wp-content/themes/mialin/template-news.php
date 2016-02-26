<?php 
/*
Template Name: Новости
*/
?>
<?php get_header(); ?>

	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<h2>Новости</h2>
					<?php wp_reset_query(); ?>
				   	<?php query_posts(array('post_type' => 'news', 'posts_per_page' => 20)); ?>
				    <?php while ( have_posts() ) : the_post(); ?>
				   
                    <div class="news-block">
                    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
						<div class="new-text"><?php the_excerpt(); ?></div>
						<a href="<?php the_permalink(); ?>" class="more">подробнее →</a>
                    </div>
                	
                    
					
					
				    <? endwhile;  ?>
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