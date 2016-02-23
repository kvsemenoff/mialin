<?php 
/*
Template Name: Каталог
*/
?>
<?php get_header(); ?>

	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2>Каталог</h2>
					<div class="produkt-wp">
						<div class="row">
							<?php
							$args = array( 'child_of' => $current_term->term_id, 'orderby' => 'name', 'order' => 'ASC' );
							$terms = get_terms( 'product_cat', $args );
							$count = count($terms);

							if($count > 0){
							   
							    foreach ($terms as $term) {

							    ?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<a href="/<?php echo 'product-category'.'/'.$term->slug; ?>">
										<div class="produkt-item item-ssd">
											<?php
												$category_thumbnail = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
											    $image = wp_get_attachment_url($category_thumbnail);
											    echo '<img alt="" src="'.$image.'" />';
											?>

											<div class="produkt-hover"><p><?php echo $term -> name; ?></p></div>
										</div>
									</a>
								</div>
								<?php
							    }
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

<?php get_footer(); ?>