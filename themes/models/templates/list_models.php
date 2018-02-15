<?php
	$girls = new WP_Query(array(
		'post_type' => 'ara_girls',
		'post_statuus' => 'publish',
		'posts_per_page' => -1
	));

	if(count($girls->posts) > 0) :
?>
<section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
	<div class="container-fluid">
		<div class="row boxed-padding bottommargin_40">
			<div class="col-md-12">
				<h2>Момичета</h2>
			</div>
		</div>

		<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
			
			<?php foreach($girls->posts as $girl) : ?>
			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
				<div class="vertical-item content-absolute">
					<div class="item-media">
						<a href="<?php echo get_the_permalink($girl->ID); ?>">
							<img src="<?php echo ici__featured_image($girl->ID,'large'); ?>" alt="<?php echo $girl->post_title; ?>">
						</a>
					</div>
				</div>
				<div class="item-title text-center">
					<h4>
						<a href="<?php echo get_the_permalink($girl->ID); ?>"><?php echo $girl->post_title; ?></a>
					</h4>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
<?php endif; ?>