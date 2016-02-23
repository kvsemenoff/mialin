<?php get_header(); ?>

<body>
	
	<div class="owl-carousel main-slider">
		<div class="item slide-1">
			<img class="w20" src="<?php echo get_template_directory_uri(); ?>/img/slide4.png" alt="">			
		</div>
		<div class="item slide-2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/slide2.png" alt="">
		</div>
		<div class="item slide-3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/slide3.png" alt="">			
		</div>
	</div>
	<div class="clearfix"></div>	
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 center">
					<h2>Преимущества</h2>
				</div>
			</div>
			<div class="preim-block">
				<div class="row">
					<div class="col-md-4">
						<div class="preim-item">
							<div class="lft">
								<i class="fa fa-certificate"></i>
							</div>
							<div class="rht">
								<h3>Качественный товар</h3>
								<p>
								Компания «Mialin-auto.ru» была основана в 2010 году, и за 5 лет мы приобрели большой опыт в сфере розничных и оптовых продаж.

Поставщики, которые производят некачественную продукцию, мы отсеиваем до их поступления на витрины нашего магазина.
							</p>
							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="preim-item">
							<div class="lft">
								<i class="fa fa-paper-plane"></i>
							</div>
							<div class="rht">
								<h3>Постоянное развитие</h3>
								<p>Mialin-auto.ru — компания, которая всегда смотрит вперед, за горизонт, чтобы иметь возможность предугадывать изменение отрасли, находиться на передовой линии развития технологий и предоставлять нашим потребителям и заказчикам самые современные продукты и услуги, которые будут в полной мере соответствовать их ожиданиям.</p>
							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="preim-item">
							<div class="lft">
								<i class="fa fa-thumbs-up"></i>
							</div>
							<div class="rht">
								<h3>Индивидуальный подход</h3>
								<p>
								Каждый клиент, заходящий в наш магазин, может рассчитывать на индивидуальный подход и отличный сервис. Мы не ограничиваем время обслуживания каждого клиента и готовы потратить любое количество времени, чтобы помочь нашим посетителям подобрать для себя оптимальный вариант.
							</p>
							
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="produkt-wp">
			<?php //echo do_shortcode('[product_categories number="10" parent="0"]'); ?>
				<h2>Продукция</h2>
				<br>
				<br>
				<br>
				<div class="row">
					<?php
					$args = array( 'child_of' => $current_term->term_id, 'orderby' => 'name', 'order' => 'ASC' );
					$terms = get_terms( 'product_cat', $args );
					$count = count($terms);

					if($count > 0){
					   
					    foreach ($terms as $term) {

					    ?>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<a href="<?php echo 'product-category'.'/'.$term->slug; ?>">
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
			<br>
			<br>
			<br>
			<div class="rotator-wp">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="news-ratator-wp">
							<div class="news-rotator-head">
								<h3>Наши новости</h3>
							</div>
							<div class="row home-news-outer">
							    <span class="bxslider-prev" id="hm-bx-prev"><a class="bx-prev" href=""></a></span>
							    <span class="bxslider-next" id="hm-bx-next"><a class="bx-next" href=""></a></span>
								<div class="bx-wrapper">
									<div class="bx-viewport">
										<ul class="home-news">
											<?php wp_reset_query(); ?>
										   	<?php query_posts(array('post_type' => 'news', 'posts_per_page' => 20)); ?>
										    <?php while ( have_posts() ) : the_post(); ?>
										    <li>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    								<div class="news-item">
								                        <div class="news-date">
								                            <span class="date"><?php the_time('j'); ?></span>
								                            <span class="month"><?php the_time('M'); ?></span>
								                        </div>
                        								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        								<div class="text"><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">подробнее →</a>
                                                    	</div>
                    								</div>
                								</div>
                							</li>
										    <? endwhile;  ?>
                                        </ul>
                                    </div>
                                    <div class="bx-controls"></div>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="revie-ratator-wp">
							<div class="revie-rotator-head">
								<h3>Отзывы покупателей</h3>
							</div>
							<div class="row customer-reviews-outer">
								<span class="bxslider-prev" id="cr-bx-prev"><a class="bx-prev" href=""></a></span>
    							<span class="bxslider-next" id="cr-bx-next"><a class="bx-next" href=""></a></span>
									<div class="bx-wrapper">
										<div class="bx-viewport">
											<div class="customer-reviews">
												
		            							<?php wp_reset_query(); ?>
											   	<?php query_posts(array('post_type' => 'review', 'posts_per_page' => 20)); ?>
											    <?php while ( have_posts() ) : the_post(); ?>

											    <div class="slide">
                									<div class="col-md-12">
                    									<blockquote>
                        									<span class="left-quote"><i class="fa fa-quote-left"></i></span>
                        									<span class="right-quote"><i class="fa fa-quote-right"></i></span><?php the_field('отзыв'); ?><br><br>                    				
                        								</blockquote>
                    									<div class="autor">
                                                            <div class="photo">
                                								<?php $url = get_field('фото'); ?>
                                								
                                								<img src="<?php echo $url[url]; ?>">
                            								</div>
                                                			<div class="person">
                            									<span><?php the_title(); ?></span>
                            									<small><?php the_field('Должность'); ?></small>
                        									</div>
                        									<div class="clearfix"></div>
                    									</div>
                									</div>
            									</div>

											    
											    <? endwhile;  ?>

            							</div>
            						</div>
            						<div class="bx-controls"></div>
            					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="main-map">
	<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=HFsT8vbtYQAalZd9JR3pi_haljYwzJI7&width=100%&height=400&lang=ru_RU&sourceType=constructor"></script>
</div>	
<?php get_footer(); ?>