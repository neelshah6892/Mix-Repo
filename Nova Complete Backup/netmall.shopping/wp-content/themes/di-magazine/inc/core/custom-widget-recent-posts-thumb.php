<?php

class Di_Magazine_Widget_Recent_Posts_Thumb extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'classname' => 'di_magazine_widget_recent_posts_thumb',
			'description' => __( 'Your site&#8217;s most recent News with Thumbnail.', 'di-magazine' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'di-magazine-widget-recent-posts-thumb', __( 'Recent News with Thumbnail', 'di-magazine' ), $widget_ops );
		$this->alt_option_name = 'di_magazine_widget_recent_posts_thumb';

	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;

		if ( ! $number ) {
			$number = 5;
		}

		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

		$r = new WP_Query( array(
			'posts_per_page'		=> $number,
			'no_found_rows'			=> true,
			'post_status'			=> 'publish',
			'ignore_sticky_posts'	=> true
		) );

		if( $r->have_posts() ) {
			 
			echo $args['before_widget'];
			
			if( $title ) {
				echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
			}

			while( $r->have_posts() ) : $r->the_post();
			?>

				<div class="postthumbmain">

					<?php if( has_post_thumbnail() ) { ?>
						<div class="postthumbmain_img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'di-magazine-recentpostthumb', array( 'class' => 'img-thumbnail' ) ); ?>	
							</a>
						</div>
					<?php } else { ?>
						<div class="postthumbmain_img">
							<a href="<?php the_permalink(); ?>">
								<img class="img-thumbnail" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" src="<?php echo esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/images/catsldrdefault90x90.jpg' ); ?>" >
							</a>
						</div>
					<?php } ?>

					<div class="postthumbmain_cntnt">
						<p>
							<a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
						</p>

						<?php if ( $show_date ) { ?>
							<small class="postthumbmain-post-date"><?php echo get_the_date(); ?></small>
						<?php } ?>
					</div>

				</div>
				<div class="clearboth bordrbrm"></div>

			<?php
			endwhile;

			echo $args['after_widget'];

			// Reset the global $the_post as this query will have stomped on it
			wp_reset_postdata();

		}
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['number'] = absint( $new_instance['number'] );
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		return $instance;
	}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'di-magazine' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of news to show:', 'di-magazine' ); ?></label>
		<input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" /></p>

		<p><input class="checkbox" type="checkbox"<?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display news date?', 'di-magazine' ); ?></label></p>
		<?php
	}
}


function di_magazine_register_recent_posts_thumb_widget() {
	register_widget( 'Di_Magazine_Widget_Recent_Posts_Thumb' );
}
add_action( 'widgets_init', 'di_magazine_register_recent_posts_thumb_widget' );
