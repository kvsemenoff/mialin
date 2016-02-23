<?php 
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>

	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2><?php the_title(); ?></h2>
					<?php 
					while ( have_posts() ) : the_post();
					    the_content();
					endwhile; 
					?>
					

				</div>
				<div class="col-md-6 ">
					<div class="map">
						<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=fo0lrHpv2KiVNJcUNj65eDkW7T9lz5C1&width=100%&height=400&lang=ru_RU&sourceType=constructor"></script>
					</div>
				</div>
				
			</div>
		</div>	
	</div>

<?php get_footer(); ?>