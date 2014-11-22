<div class="footer">
			<div class="inner max-width">
				<ul class="social">
					<li><a class="icons facebook" href="#"></a></li>
					<li><a class="icons twitter" href="#"></a></li>
					<li><a class="icons linkedin" href="#"></a></li>
					<li><a class="icons dribbble" href="#"></a></li>
					<li><a class="icons pinterest" href="#"></a></li>
				</ul>

				<div id="backtotop"><a name="bottom" href="#top" ></a></div>

				<div class="copyright">
					<p class="left">Copyright <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> <?php echo date('Y'); ?> 
						
								. All rights reserved.</p>
					<p class="right">Powered by <a href="https://newskoolstudios.net" target="_blank">NSS</a>. Developed by <a href="https://twitter.com/raunakhajela" title="Raunak Hajela" target="_blank">Raunak Hajela</a></p>
				</div>

			</div>
		</div>


<script type="text/javascript">

$(document).ready(function () {
    $('nav.menu ul li').hover(
        function () {
            //show submenu
            $('ul', this).slideDown("fast");
        }, function () {
            //hide submenu
            $('ul', this).slideUp("fast");
    });
});

$(document).ready(function () {

tiles = $("#backtotop").fadeTo(0, 0);

$(window).scroll(function(d,h) {
    tiles.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(500,1);
    });
});

});
</script>
<?php wp_footer(); ?>
	</body>

</html>