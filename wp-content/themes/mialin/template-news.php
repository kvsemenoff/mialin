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
						<ul class="nav nav-pills nav-stacked vertical-left-menu">
							<?php
							$args = array( 'child_of' => $current_term->term_id, 'orderby' => 'name', 'order' => 'ASC' );
							$terms = get_terms( 'product_cat', $args );
							$count = count($terms);
							 if($count > 0){
							    $i=0;
							    foreach ($terms as $term) {
							    	$cls = '';
									if ($i==0) {
									    $cls = ' class="active"';
									}else{$cls="";}     	
							    	echo '<li '.$cls.'><a href="'.$term->taxonomy.'='.$term->slug.'"><i class="fa fa-angle-right"></i>'.$term->name.'</a></li>';
							      	$i++;
							    }
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>	
	</div>

<?php get_footer(); ?>