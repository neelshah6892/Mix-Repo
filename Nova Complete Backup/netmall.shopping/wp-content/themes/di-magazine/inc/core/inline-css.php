<?php
function di_magazine_inline_css() {

	$custom_css = "";
	
	// For sticky post.
	if( get_theme_mod( 'sticky_dt_disply', '1' ) == 0 ) {

		$custom_css .= "
		.sticky .post-date {
			display: none;
		}
		";
	}

	// For load icon.
	if( get_theme_mod( 'loading_icon_img' ) ) {
		$icon_link =  esc_url( get_theme_mod( 'loading_icon_img' ) );
	} else {
		$icon_link =  esc_url( get_template_directory_uri() . '/assets/images/Preloader_2.gif' );
	}

	$custom_css .= "
	.load-icon
	{
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999999;
		background: url( '" . $icon_link . "' ) center no-repeat #fff;
	}
	";

	// Masonry.
	if( get_theme_mod( 'blog_list_grid', 'grid2c' ) == 'grid2c' ) {

		$custom_css .= "
		@media (min-width: 768px) {
		  .dimasonrybox {
		    width: 48%;
		    margin-right: 2% !important;
		  }
		}
		";

	} elseif( get_theme_mod( 'blog_list_grid', 'grid2c' ) == 'grid3c' ) {

		$custom_css .= "
		@media (min-width: 768px) {
		  .dimasonrybox {
		    width: 31%;
		    margin-right: 2% !important;
		  }
		}
		";

	} else {
		$custom_css .= "";
	}

	wp_add_inline_style( 'di-magazine-style-core', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'di_magazine_inline_css' );
