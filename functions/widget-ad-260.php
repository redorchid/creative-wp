<?php 

/****************************************************/
/* Widget that displays a single 260x120px ad block */  
/***************************************************/

class Creative_Ad_260_Widget extends WP_Widget {

	public function __construct() {

		parent:: __construct(

			'creative_ad_260_w',
			'Custom Widget: 260x120 Ad',
			array('description' => __('Displays a single 260x120 ad block'))

			);

	}

	public function form($instance) {

		$defaults = array(

			'title' => __('Ad 260x120'),
			'ad_img' => IMAGES . '/add1.png',
			'ad_link' => 'http://tutsplus.com'
			);

		$instance = wp_parse_args((array) $instance, $defaults);

		?>

		<!-- The Title -->
		
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" 
			class="widefat" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>


		<!-- Ad Image -->


		<p>
			<label for="<?php echo $this->get_field_id('ad_img'); ?>"><?php _e('Ad Image'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id('ad_img'); ?>" name="<?php echo $this->get_field_name('ad_img'); ?>" 
			class="widefat" value="<?php echo esc_attr($instance['ad_img']); ?>" />
		</p>

		<!-- Ad Link -->

		<p>
			<label for="<?php echo $this->get_field_id('ad_link'); ?>"><?php _e('Ad Link'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id('ad_link'); ?>" name="<?php echo $this->get_field_name('ad_link'); ?>" 
			class="widefat" value="<?php echo esc_attr($instance['ad_link']); ?>" />
		</p>

		<?php

	}

	public function update($new_instance, $old_instance) {
		$instance = $old_instance;

		//Title
		$instance['ad_img'] = $new_instance['ad_img'];
		$instance['ad_link'] = $new_instance['ad_link'];

		return $instance;

	}

	public function widget ($args, $instance) {

		extract($args);
		$title = apply_filters('widget_title', $instance['title']);

		$ad_img = $instance['ad_img'];
		$ad_link = $instance['ad_link'];

		echo $before_widget;

		if($title) {
			echo $before_title . $title . $after_title;
		}

		
		echo '<div class="add-big">' ;
		if($ad_img) : ?>
		<a href="<?php echo $ad_link; ?>">
		<img src="<?php echo $ad_img; ?>" />
		</a>
		<?php endif;
		echo '</div>';
		

		echo $after_widget;

	}

}

register_widget('Creative_Ad_260_Widget');

 ?>