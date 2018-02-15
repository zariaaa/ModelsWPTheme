<?php
	get_header();
	
		while(have_posts()) : the_post();
?>

<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
	<div class="container">
		<div class="row">
			
			<?php 
				get_template_part('templates/single/left'); 
				
				get_template_part('templates/single/right'); 
			?>		
			
		</div>
	</div>
</section>

<?php		
		endwhile;
	
	get_footer();
