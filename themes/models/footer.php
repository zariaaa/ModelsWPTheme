<?php 
	global $rdx; 
?>

<section class="ls page_copyright section_padding_20">
				<div class="container">
					<div class="row topmargin_5 bottommargin_5">
						<div class="col-sm-12 text-center">
							<?php	if(!empty($rdx['rdx_footer__copyright'])){ 	?>
								<p class="darklinks">
									<?php echo $rdx['rdx_footer__copyright']; ?>
								</p>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<?php wp_footer(); ?>

</body>

</html>