<?php 

class About extends WP_Widget {
	function __construct() {
		$params = array(
			'name' => 'Creative : About Widget',
			'description' => 'Displays info of your blog'
			);
		parent:: __construct('About','',$params);
	}

	public function form($instance) {
		//display our form in widget page
		extract($instance);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>">Title : </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" 
			value="<?php if(isset($title)) echo esc_attr($title); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('description') ?>">Description : </label>
			<textarea 
			class="widefat" 
			id="<?php echo $this->get_field_id('description') ?>" 
			name="<?php echo $this->get_field_name('description') ?>" > <?php if(isset($description)) echo esc_attr($description); ?>
		    </textarea>
		</p>
		<?php
	}

	public function widget($args,$instance) {
		//displays our widget
		extract($args);
		extract($instance);
		echo $before_widget;
		   echo $before_title .$title. $after_title;
		   echo $description;
		echo $after_widget;
	}
} 

add_action('widgets_init','rh_register_about');
function rh_register_about() {
	register_widget('About');
}

?>