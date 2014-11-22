<?php
add_action('admin_menu',function() {
	add_options_page('Theme Options','Theme Options','administrator',__FILE__,function() {
	?>
	<h2>Hello!!</h2>
	<?php
  });
});
?>