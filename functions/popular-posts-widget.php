<?php 

/****************************************************/
/* Widget that displays a popular posts widget */  
/***************************************************/

class Popular extends WP_Widget {
	function __construct() {
		$params = array(
			'name' => 'Creative : Popular Posts Widget',
			'description' => 'Displays recent posts of your blog'
			);
		parent:: __construct('Popular','',$params);
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
		   echo '<div class="popular">';
		   if(have_posts()) {
		   	while (have_posts()) {
		   		the_post();
		   		echo "<ul>";
		   		echo "<li>";
		   		// $link = get_permalink(get_the_ID());
		   		$link = get_permalink();
		   		echo "<a href=$link>";
		   		the_title();
		   		echo "</a>";
		   		echo "<p>";
		   		echo the_time(get_option('date_format'));
		   		echo "</p>";
		   		echo "</li>";
		   		echo "</ul>";
		   	}
		   }
		   else {
		   	echo "<h1>No posts were found!</h1>";
		   }
		   echo '</div>';
		echo $after_widget;
	}
} 

add_action('widgets_init','rh_register_popular');
function rh_register_popular() {
	register_widget('Popular');
}

 ?>