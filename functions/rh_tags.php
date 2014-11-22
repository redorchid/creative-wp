<?php 

class RH_Tags extends WP_Widget {
	function __construct() {
		$params = array(
			'name' => 'Creative : Tag Cloud Widget',
			'description' => 'Displays info of your blog'
			);
		parent:: __construct('RH_Tags','',$params);
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
		<?php
	}

	public function widget($args,$instance) {
		//displays our widget
		extract($args);
		extract($instance);
		echo $before_widget;
		   echo $before_title .$title. $after_title;
		   echo '<div class="label">';
		   echo '<ul class="tags">';
		   		echo "<li>";
		   		echo the_tags(' ',' &nbsp; ');
		   		echo "</li>";
		   echo '</ul>';
		   echo '</div>';
		echo $after_widget;
	}
} 

add_action('widgets_init','rh_register_tags');
function rh_register_tags() {
	register_widget('RH_Tags');
}

?>