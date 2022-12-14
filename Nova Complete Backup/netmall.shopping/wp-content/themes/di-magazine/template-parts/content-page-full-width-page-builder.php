<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> itemscope itemtype="http://schema.org/CreativeWork">
	<div class="content-first">
		
		<?php
		if( get_post_meta( get_the_id(), '_di_magazine_hide_title', true ) != 1 ) {
		?>
			<div class="content-second">
				<h1 class="the-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
			</div>
		<?php
		}
		?>

		<div class="entry-content" itemprop="text">
			<?php the_content(); ?>
		</div>
					
		<?php
		wp_link_pages( array(
			'before'           => '<p class="pagelinks">' . __( 'Pages:', 'di-magazine' ),
			'after'            => '</p>',
			'link_before'      => '<span class="pagelinksa">',
			'link_after'       => '</span>',
		) );
		?>

	</div>
</div>
