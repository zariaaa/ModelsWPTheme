<div class="col-md-7">
	<h2 class="topmargin_0 bottommargin_30"></h2>
	<div class="model-parameters grey gradient_bg_goriz before_cover">
			<div class="bg_overlay"></div>
			<?php 
				 $age = get_post_meta(get_the_ID(), 'g_age', true);
				 $height = get_post_meta(get_the_ID(), 'g_height', true);
				 $weight = get_post_meta(get_the_ID(), 'g_weight', true);
				 $city = get_post_meta(get_the_ID(), 'g_city', true);
			?>
			<?php if(!empty($age)){?>
			<div>
				<span class="bold">Години</span>
				<br>
				<span><?php echo $age; ?></span>
			</div>
			<?php } ?>
			
			<?php if(!empty($height)){?>
			<div>
				<span class="bold">Ръст</span>
				<br>
				<span><?php echo $height; ?></span>
			</div>
			<?php } ?> 
			
			<?php if(!empty($weight)) { ?>
			<div>
				<span class="bold">Тегло</span>
				<br>
				<span><?php echo $weight; ?></span>
			</div>
			<?php } ?>
			
			<?php if(!empty($city)){ ?>
			<div>
				<span class="bold">Град</span>
				<br>
				<span><?php echo $city; ?></span>
			</div>
			<?php } ?>
		</div>
		
	<?php the_content(); ?>
	<?php 
		$gal = get_post_meta(get_the_ID(),'post__image_gallery');
		if(count($gal) > 0){
	?>
	<div class="columns_padding_5">
		<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
			<?php 
			foreach($gal as $k=>$v) {
				$image = wp_get_attachment_image_src($v,'medium');
				$image_big = wp_get_attachment_image_src($v,'full');
			?>
			<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
				<div class="vertical-item gallery-item content-absolute text-center cs">
					
					<div class="item-media">
						<img src="<?php echo $image[0]; ?>" alt="">
						<div class="media-links">
							<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="<?php echo $image_big[0]; ?>"></a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<!-- eof .isotope_container.row -->
	</div>
	<?php } ?>

</div>
