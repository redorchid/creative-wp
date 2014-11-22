<?php get_header(); ?>
<div class="content-wrapper">
			<div class="inner max-width">

				<div class="main-wrapper">
				 <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

				 <div class="blog-posts">

						<div class="post-item">
							<?php if(has_post_thumbnail()) :  ?>
							<div class="thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<ul class="share">
									<li><a href="" id="fb"></a></li>
									<li><a href="" id="tw"></a></li>
								</ul>
							</div>
						<?php endif; ?>
							<div class="description">
								<h2 class="post-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>	
								<div class="meta">
									<p id="date"><?php the_time(get_option('date_format')); ?></p>
								</div>
								<p><?php the_content('',true,''); ?></p>
							</div>
						</div>
					</div>

				    <?php endwhile; else :  ?>
				    <h1><?php _e('No posts were found!', 'codefear-framework'); ?></h1>
				 <?php endif; ?>

				 <div class="older"><p><?php next_posts_link('&laquo; Older posts'); ?></p></div>
				 <div class="newer"><p><?php previous_posts_link('&laquo; Newer posts'); ?></p></div>


					<div class="navigation">

					</div>

				</div> <!-- main-wrapper -->

				<div class="sidebar-wrapper">
					<?php get_sidebar(); ?>
				</div> <!-- sidebar-wrapper -->

			</div> <!-- inner -->
		</div> <!-- Content-wrapper -->
<?php get_footer(); ?>