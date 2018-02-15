<?php
	global $rdx;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php if(!empty($rdx['rdx_header__favicon']['url'])) { ?>
	    <!-- Favicon --> 
	    <link href="<?php echo $rdx['rdx_header__favicon']['url']; ?>" rel="shortcut icon" type="image/png">
    <?php } ?>
	<?php wp_head(); ?>
</head>

<body>
	<!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			

			<header class="page_header header_darkgrey columns_padding_0 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center">
							<?php if(!empty($rdx['rdx_header__logo']['url'])){ 	?>
							<a href="<?php echo home_url(); ?>" class="logo logo_image">
								<h1>beauty
									<span class="muellerhoff">Agency</span>
								</h1>
								<img src="<?php echo $rdx['rdx_header__logo']['url']; ?>" alt="<?php echo get_bloginfo( 'name');?> ">
							</a>
							<?php }?>
						</div>
						<div class="col-md-4 text-center">
							<!-- main nav start -->
							<?php
                            	wp_nav_menu(array(
									'theme_location' => 'top',
									'container' => 'nav',
									'container_class' => 'mainmenu_wrapper',
									'menu_class' => 'mainmenu nav sf-menu'
								));
                            ?>
							<!-- eof main nav -->
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>
						<div class="col-md-2 gtranslate_wrapper">
							<?php echo do_shortcode('[gtranslate]'); ?>
						</div>
					</div>
				</div>
			</header>