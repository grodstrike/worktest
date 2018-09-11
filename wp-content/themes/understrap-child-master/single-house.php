<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$data['address'] = get_field('address');
$data['photo_house'] = get_field('photo_house');
$data['ploshad'] = get_field('ploshad');
$data['price'] = get_field('price');
$data['living_space'] = get_field('living_space');
$data['floor'] = get_field('floor');
$data['description'] = get_field('description');
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			

			<main class="site-main" id="main">
			<div class="appcard">
				<div class="headerMain">
					<h1><?php the_title(); ?></h1>
					<address>
					<?php echo $data['address'];?>
					</address>
				</div>
				<div class="cardImage">
				<img src="<?php echo $data['photo_house']['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
				<div class="description">
					<div class="info-block">
						<div class="col-md-3 postMain" >
							<div class="info-title">
								Площадь
							</div>
							<div class="info-text">
								<?php echo $data['ploshad'];?> м²
							</div>
						</div>
						<div class="col-md-3 postMain" >
							<div class="info-title">
								Этажей в доме
							</div>
							<div class="info-text">
								<?php echo $data['floor'];?>
							</div>
						</div>
						<div class="col-md-3 postMain" >
							<div class="info-title">
								Стоимость
							</div>
							<div class="info-text">
								<?php echo $data['price'];?> ₽
							</div>
						</div> 
						<?php if (!empty($data['living_space'])):?>
						<div class="col-md-3 postMain" >
							<div class="info-title">
								Жилая площадь
							</div>
							<div class="info-text">
								<?php echo $data['living_space'];?>  м²
							</div>
						</div>
						<?php endif;?>
					</div>
					<div class="info-block" style="float: left;">
						
							<p class="description-text"><?php echo $data['description'];?></p>
						
					</div>
			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
