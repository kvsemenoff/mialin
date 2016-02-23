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

									

							    	echo '<li '.$cls.'><a href="/'.'product-category/'.$term->slug.'"><i class="fa fa-angle-right"></i>'.$term->name.'</a></li>';
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