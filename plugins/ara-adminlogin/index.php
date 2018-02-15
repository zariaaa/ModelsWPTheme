<?php
/*
 * Plugin Name: Asitora | Admin Login
 * Author: Asitora
 * Author URI: http://asitora.com
 * Version: 1.0
 * Description: Simple and beauty login template. :)
 */
	 
function ara__style_admin_login() {
	
	?>
	<style>
		body {
			background-color: #FFFE0C;
		}
		
		a {
			color: #fff !important;
		}
		
		#backtoblog,
		#nav {
			text-align: center !important;
		}
		
		#login h1 a {
			background-image: url('http://asitora.com/assets/img/asitora.png') !important;
		}
		
		.wp-core-ui .button-primary {
		    background: #c43d3d;
		    border-color: #c43d3d #c43d3d #c43d3d;
		    box-shadow: 0 1px 0 #c43d3d;
		    color: #fff;
		    text-decoration: none;
		    text-shadow: 0 -1px 1px #c43d3d, 1px 0 1px #c43d3d, 0 1px 1px #c43d3d, -1px 0 1px #c43d3d;
		}
		
		.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
		    background: #b03737;
		    border-color: #b03737;
		    color: #fff;
		}

	</style>
	<?php
	
}

add_action('login_head','ara__style_admin_login');
