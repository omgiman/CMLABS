<?php

if( have_rows('hero') ):
	while( have_rows('hero') ): the_row();
	
	$hero_image = get_sub_field('hero_image');
	
	if( have_rows('hero_content') ):
		while( have_rows('hero_content') ): the_row();
		
		$hero_title = get_sub_field('hero_title');
		$hero_description = get_sub_field('hero_description');
		
		endwhile;
	endif;

	endwhile;
endif;

if( have_rows('who_we_are') ):
	while( have_rows('who_we_are') ): the_row();
	
	$intro_image = get_sub_field('intro_image');
	
	if( have_rows('intro_content') ):
		while ( have_rows('intro_content') ): the_row();
		
		$intro_title = get_sub_field('intro_title');
		$intro_description = get_sub_field('intro_description');

		endwhile;
	endif;

	endwhile;
endif;

if( have_rows('capabilities') ):
	while( have_rows('capabilities') ): the_row();
	
	$capabilities_title = get_sub_field('capabilities_title');
	$capabilities_description = get_sub_field('capabilities_description');
	$capabilities_use_case_proposal = get_sub_field('capabilities_use_case_proposal');
	
	if( have_rows('capabilities_columns') ):
		while( have_rows('capabilities_columns') ): the_row();
	
	$first_column_image = get_sub_field('first_column_image');
	$first_column_title = get_sub_field('first_column_title');
	$first_column_description = get_sub_field('first_column_description');
	
	$second_column_image = get_sub_field('second_column_image');
	$second_column_title = get_sub_field('second_column_title');
	$second_column_description = get_sub_field('second_column_description');
	
	$third_column_image = get_sub_field('third_column_image');
	$third_column_title = get_sub_field('third_column_title');
	$third_column_description = get_sub_field('third_column_description');
	
		endwhile;
	endif;
	
	endwhile;
endif;

if( have_rows('clients') ):
	while( have_rows('clients') ): the_row();
	
	$clients_title = get_sub_field('clients_title');
	$clients_description = get_sub_field('clients_description');
	$clients_logo = get_sub_field('clients_logo');
	$clients_more = get_sub_field('clients_more');
	
	endwhile;
endif;

if( have_rows('addresses') ):
	while( have_rows('addresses') ): the_row();
	
	$address_title = get_sub_field('address_title');
	$address_description = get_sub_field('address_description');
	
	$address_one_title = get_sub_field('address_one_title');
	$address_one_description = get_sub_field('address_one_description');
	
	$address_two_title = get_sub_field('address_two_title');
	$address_two_description = get_sub_field('address_two_description');
	
	endwhile;
endif;

?>

<html>

	<head><?php wp_head(); ?></head>
	
	<body id="body" <?php body_class(); ?>>
		<div id="bodyfat">

			<?php dynamic_sidebar( 'top-widget' ); ?>

			<div id="hero" class="section">
				<div id="hero-image">
					<img src="<?php echo $hero_image; ?>">
				</div>
				<div id="hero-title" class="title">
					<h1><?php echo $hero_title; ?></h1>
				</div>
				<div id="hero-description" class="description">
					<?php echo $hero_description; ?>
				</div>
			</div>

			<div id="intro" class="section">
				<div id="intro-image">
					<img src="<?php echo $intro_image; ?>">
				</div>
				<div id="intro-title" class="title">	
					<h2><?php echo $intro_title; ?></h2>
				</div>
				<div id="intro-description" class="description">
					<?php echo $intro_description; ?>
				</div>
			</div>

			<div id="capabilities" class="section">
				<div id="capabilities-title" class="title">
					<h2><?php echo $capabilities_title; ?></h2>
				</div>
				<div id="capabilities-description" class="description">
					<?php echo $capabilities_description; ?>
				</div>
				<div id="capabilities-columns">
					<div class="column">
						<div id="first-column">
							<img src="<?php echo $first_column_image; ?>">
							<div class="title">
								<h3><?php echo $first_column_title; ?></h3>
							</div>
							<div class="description">
								<p><?php echo $first_column_description; ?></p>
							</div>
						</div>
					</div>
					<div class="column">
						<div id="second-column">
							<img src="<?php echo $second_column_image; ?>">
							<div class="title">
								<h3><?php echo $second_column_title; ?></h3>
							</div>
							<div class="description">
								<p><?php echo $second_column_description; ?></p>
							</div>
						</div>
					</div>
					<div class="column">
						<div id="third-column">
							<img src="<?php echo $third_column_image; ?>">
							<div class="title">
								<h3><?php echo $third_column_title; ?></h3>
							</div>
							<div class="description">
								<p><?php echo $third_column_description; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div id="capabilities-usecase-proposal" class="description">
					<?php echo $capabilities_use_case_proposal; ?>
				</div>
			</div>

			<div id="clients" class="section">
				<div id="clients-title" class="title">
					<h2><?php echo $clients_title; ?></h2>
				</div>
				<div id="clients-description" class="description">
					<?php echo $clients_description; ?>
				</div>
				<div id="clients-logo">
					<img src="<?php echo $clients_logo; ?>">
				</div>
				<div id="clients-more" class="description">
					<?php echo $clients_more; ?>
				</div>
			</div>
			
			<div id="addresses" class="section">
				<div id="address-title" class="title">
					<h2><?php echo $address_title; ?></h2>
				</div>
				<div id="address-description" class="description">
					<?php echo $address_description; ?>
				</div>
				<div id=="addresses-columns">
					<div class="column">
						<div id="address-one">
							<div class="title">
								<h3><?php echo $address_one_title; ?></h3>
							</div>
							<div class="description">
								<?php echo $address_one_description; ?>
							</div>
						</div>
					</div>
					<div class="column">
						<div id="address-two">
							<div class="title">
								<h3><?php echo $address_two_title; ?></h3>
							</div>
							<div class="description">
								<?php echo $address_two_description; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php dynamic_sidebar( 'bottom-widget' ); ?>

		</div>
	</body>

</html>