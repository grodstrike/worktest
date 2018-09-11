<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>
<script>
 jQuery('#submit').click(function(e) {
        jQuery.ajax({
            
                url:plumb_ajax.ajax_url,
                type:'POST',
                dataType:"json",
                data: {
                    action:'single_post',
                    title:jQuery('#post_title').val(),
                    content:jQuery('#post_content').val()
                },
                 success: function(response){
                        alert('complate');
                }
                
        });
   
       return false;
   });
</script>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">


			<main class="site-main" id="main">
				
					<div class="clearfix"></div>
					<h2>Недвижимость</h2>
						<div class="container">
							
						<?php


							// задаем нужные нам критерии выборки данных из БД
							$args = array(
								'posts_per_page' => 15,
								'orderby' => 'comment_count',
								'post_type' => array('apartment','office','house')

							);

							$query = new WP_Query( $args );

							// Цикл
							if ( $query->have_posts() ) {
								$i = 1;
								while ( $query->have_posts() ) {
									?>
									<div class="col-md-4 postMain" >	
									
									<?php
										$query->the_post();
									?>
										<a href="<?php the_permalink(); ?>">
											<?php
												echo '<div>'.get_the_title().'</div>';
												$image = get_field('photo_house');
												if( !empty($image) ): ?>

									<img src="<?php echo $image['sizes']['thumbnail']; ?>" >
								

								</a>
								<?php $data['ploshad'] = get_field('ploshad');
									$data['price'] = get_field('price');
									$data['living_space'] = get_field('living_space');
									$data['floor'] = get_field('floor');
									$data['description'] = get_field('description');
									$data['town']  = get_field('town');
							
									?>
								<div class="info-main"><span>Площадь: <?php echo $data['ploshad'];?>  м²</span>
									<span>Этаж: <?php echo $data['floor'];?></span>
									<span>Cтоимость: <?php echo $data['price'];?> ₽ </span>
								</div>
												</div>
								<?php endif;
									}
								} else {
									// Постов не найдено
								}
								/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
								wp_reset_postdata();
				
?>
					</div>
					<div class="clearfix"></div>
					
					<div class="container" style="margin-top: 5%;">
						<h2>Города</h2>
						<div class="container">
							
						<?php


							// задаем нужные нам критерии выборки данных из БД
							$args = array(
								'posts_per_page' => 5,
								'orderby' => 'comment_count',
								'post_type' => 'town'

							);

							$query = new WP_Query( $args );

							// Цикл
							if ( $query->have_posts() ) {
								$i = 1;
								while ( $query->have_posts() ) {
									?>
									<div class="col-md-3 postMain" >	
									
									<?php
										$query->the_post();
									?>
										<a href="<?php the_permalink(); ?>">
											<?php
												echo '<div>'.get_the_title().'</div>';
												$image = get_field('photo_town');
												$size = 'full'; // (thumbnail, medium, large, full or custom size)

													if( $image ) 
													{
														echo wp_get_attachment_image( $image, $size );
													}
														if( !empty($image) ): ?>

									<img src="<?php echo $image['sizes']['thumbnail']; ?>" >

										</a>
										
									</div>
								<?php endif;
									}
								} else {
									// Постов не найдено
								}
								/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
								wp_reset_postdata();
				
?>
						</div>
					</div>
			</main>
		</div>
	</div><!-- Container end -->
<div>

</div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
