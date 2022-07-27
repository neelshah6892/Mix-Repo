<?php

/**
 *
 * @link       https://sourabhagrawal.com/
 * @since      1.0.0
 *
 * @package    Disable_Wp_Notification
 * @subpackage Disable_Wp_Notification/admin
 */

/**
 *
 * Defines the plugin name, version, and two hooks to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Disable_Wp_Notification
 * @subpackage Disable_Wp_Notification/admin
 * @author     Sourabh Agrawal <sourabh.asct@gmail.com>
 */
class Disable_Wp_Notification_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the menu for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function admin_menu() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Disable_Wp_Notification_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Disable_Wp_Notification_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		/*
		*	Check if this setting can be managed by only the site administrator
		*	No other user role will be able to manage this settings
		*/

		if(function_exists('wp_get_current_user')){
		$user = wp_get_current_user();
		$CurentUserRoles = (array) $user->roles;
		if(in_array('administrator', $CurentUserRoles)){
			add_menu_page( __('Disable Notifications', 'disable-wp-notification'), __('Disable Notices', 'disable-wp-notification'), 'manage_options', 'disable-wp-notification', array($this, 'disable_notification'), 'dashicons-welcome-comments', 99  );

		}
		}
		
	}

    /**
	 * Options page callback
	 *
	 * @since    1.0.2
	 */
    public function disable_notification()
    {
    	$option = array();
    	$option['enable'] = '';
    	$option['all'] = '';
    	$option['without-admin'] = '';

        // Set class property
    	if(isset($_POST['disable_notifications'])){
    		$user_role = sanitize_text_field($_POST['disable_notifications']['user_role']);
    		
    		$savedOptions['user_role'] = $user_role;
    		update_option('disable_notifications', $savedOptions);
    	}

    	$options = get_option( 'disable_notifications' );
    	if (!empty($options)) {
    		if (in_array('enable', $options)) {
    			$option['enable'] = 'checked = "checked"';
    		}
    		if (in_array('all', $options)) {
    			$option['all'] = 'checked = "checked"';
    		}
    		if (in_array('without-admin', $options)) {
    			$option['without-admin'] = 'checked = "checked"';
    		}
    	} 

    	?>
    	<div class="wrap">
    		<div class="disable-notification-wrapper">
    			<header> <?php echo __('Disable Notifications', 'disable-wp-notification'); ?></header>
    			<section>
    				<form method="post">
    					<div class="menu-wrapper">
    						<div class="left-menu">
    							<div class="handler-wrapper">
    								<div class="element-wrapper show">
    									<div class="event-handler" aria-controls="area-1"> <?php echo __('Settings', 'disable-wp-notification');?> </div>
    									<div class="handled-section" id="area-1">
    										<div class="form-element">
    											<div class="option"> 
    												<input type="radio" <?php echo $option['enable']; ?> id="item-0" name="disable_notifications[user_role]" value="enable">
    											</div>
    											<div class="text"><label for="item-0"><?php echo __('Enable all notifications', 'disable-wp-notification'); ?> </label></div>
    										</div>

    										<div class="form-element">
    											<div class="option"> 
    												<input type="radio" <?php echo $option['all']; ?> id="item-1" name="disable_notifications[user_role]" value="all">
    											</div>
    											<div class="text"><label for="item-1"><?php echo __('Disable Notifications for all users', 'disable-wp-notification'); ?> </label></div>
    										</div>
    										<div class="form-element">
    											<div class="option"> 
    												<input type="radio" <?php echo $option['without-admin']; ?> id="item-2" name="disable_notifications[user_role]" value="without-admin">
    											</div>
    											<div class="text"><label for="item-2"><?php echo __('Disable Notifications for all users except admin', 'disable-wp-notification'); ?> </label></div>
    										</div>

    										<?php
    										if(function_exists('submit_button')){
    											submit_button(__('Update', 'disable-wp-notification'));
    										} else {
    											?> 
												<input type="submit" value="Update" name="disable_wp_notification_update">
    											<?php
    										}
    										?>

    									</div>
    								</div>
    								<div class="element-wrapper show">
    									<div class="event-handler" aria-controls="area-2"> <?php echo __('Notifications', 'disable-wp-notification');?> </div>
    									<div id="display-notifications" class="handled-section" id="area-2">
    										<h1>All The Notifications</h1>
    									</div>
    								</div>
    								<div class="element-wrapper show">
    									<div class="event-handler" aria-controls="area-3"> <?php echo __('About / Features', 'disable-wp-notification');?> </div>
    									<div class="handled-section" id="area-2">
    										<div class="description">
    											<ul>
    												<li>Disable All the Notifications.</li>
    												<li>Disable Plugin Update Notification.</li>
    												<li>Disable Theme Update Notification.</li>
    											</ul>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</form>
    			</section>
    		</div>
    	</div>
    	<?php
    }
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.3
	 */
	public function enqueue_styles() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Disable_Wp_Notification_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Disable_Wp_Notification_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/disable-wp-notification-admin.css', array(), $this->version, 'all' );

		if(isset($_POST['disable_notifications'])){
    		$user_role = sanitize_text_field($_POST['disable_notifications']['user_role']);
    		$options['user_role'] = $user_role;
		} else {
			$options = get_option('disable_notifications');
		}


		if(!empty($options) && function_exists('wp_get_current_user')){
			$user = wp_get_current_user();
			$CurentUserRoles = (array) $user->roles;
			if(in_array('enable', $options)){ } else {
				if (
					(in_array('all', $options))
					|| (!in_array('administrator', $CurentUserRoles) && in_array('without-admin', $options))
				) {
					?> 
					<style type="text/css">
						body.wp-admin:not(.theme-editor-php) .notice:not(.updated),
						body.wp-admin .update-nag,
						body.wp-admin #adminmenu .awaiting-mod, 
						#adminmenu .update-plugins,
						#message.woocommerce-message,
						body.wp-admin .plugin-update.colspanchange,
						.notice.elementor-message.elementor-message-dismissed
						{display: none !important;}

						body.wp-admin #display-notifications .notice,
						body.wp-admin #display-notifications .update-nag,
						#display-notifications #message.woocommerce-message 
						{
							display: block !important;
						}
					</style>
					<?php
				}
			}
		}
	}
	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.3
	 */
	public function enqueue_scripts() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Disable_Wp_Notification_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Disable_Wp_Notification_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/disable-wp-notification-admin.js', array( 'jquery' ), $this->version, false );

		if(isset($_POST['disable_notifications'])){
    		$user_role = sanitize_text_field($_POST['disable_notifications']['user_role']);
    		$options['user_role'] = $user_role;
		} else {
			$options = get_option('disable_notifications');
		}

		if(!empty($options) && function_exists('wp_get_current_user')){
			$user = wp_get_current_user();
			$CurentUserRoles = (array) $user->roles;

			if(in_array('enable', $options)){ } else {
				if (
					(in_array('administrator', $CurentUserRoles) && in_array('all', $options))
					|| (!in_array('administrator', $CurentUserRoles) && in_array('without-admin', $options))
				) {

					wp_enqueue_script( $this->plugin_name.'-1', plugin_dir_url( __FILE__ ) . 'js/disable-wp-notifications.js', array( 'jquery' ), $this->version, false );
				}
			}
		}
	}

	public function add_settings_link( $links ) {
		$settings_link = '<a href="options-general.php?page=disable-wp-notification">' . __( 'Settings' ) . '</a>';
		array_push( $links, $settings_link );
		return $links;
	}

}
