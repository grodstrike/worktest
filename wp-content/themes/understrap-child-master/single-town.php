<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

			
					<div class="container">
				<?php 

$posts = get_field('objects');

if( $posts ): ?>
  
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
			<div class="col-md-4 postMain" >	
				<a href="<?php the_permalink(); ?>"><div><?php the_title(); ?></div><?php  $image = get_field('photo_house'); if( !empty($image) ):?>
					<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; 
						$data['ploshad'] = get_field('ploshad');
						$data['price'] = get_field('price');
						$data['living_space'] = get_field('living_space');
						$data['floor'] = get_field('floor');
						$data['description'] = get_field('description');
					?>
				</a>
				
    
					<div class="info-main">
						<span>Площадь: <?php echo $data['ploshad'];?>  м²</span>
						<span>Этаж: <?php echo $data['floor'];?></span>
						<span>Cтоимость: <?php echo $data['price'];?> ₽ </span>
					</div>
            </div>
        
    <?php endforeach; ?>
   
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
            </div>

				
			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
