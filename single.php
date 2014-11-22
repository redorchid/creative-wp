<?php get_header(); ?>
<div class="content-wrapper">
			<div class="inner max-width">

				<div class="main-wrapper">
					<div class="article-page">

						<div class="blog-posts">

							<div class="post-item">
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<div class="description">
									<h2 class="post-title">
										<a href="posts.html"><?php the_title(); ?></a>
									</h2>	
									<div class="meta">
										<p id="date"><?php the_time(get_option('date_format')); ?></p>
									</div>
									<div class="content">
									<?php if(has_post_thumbnail()) :  ?>
									<?php the_post_thumbnail(); ?>
								<?php else: ?>
								<hr>
							<?php endif; ?>
										<?php the_content(); ?>
									</div>
								</div>
							    <?php endwhile; else :  ?>
							    <p><h1><?php _e('No posts were found', 'codefear-framework'); ?></h1></p>

							<?php endif; ?>

								<div class="tagshare">
									<?php if(has_tag()) : ?>
									<ul class="tags">
										<li>Tagged with :</li>
										<li><?php the_tags(' ',' &nbsp; '); ?></li>
									</ul>
								<?php endif; ?>
									<ul class="share">
										<li>Share :</li>
										<li><a class="fb" href="#">Facebook</a></li>
										<li><a class="tw" href="#">Twitter</a></li>
										<li><a class="gp" href="#">Google+</a></li>
									</ul>
								</div>

								<div class="author">
									<h2>Author : <?php the_author_posts_link(); ?></h2>
									<div class="author-bg">
										<div class="athumb">
											<?php echo get_avatar( get_the_author_email(), '256' ); ?>
										</div>
										<p class="abio"><?php the_author_meta('description'); ?></p>
									</div>
								</div>

								<?php 
                                add_filter('the_content', function($content) {
                                    $id = get_the_id();
                                	if(!is_singular('post')) {
                                		return $content;
                                	}
                                	$terms = get_the_terms($id,'category');
                                	print_r($terms);
								
							    });

								 ?>
								<!-- <div class="related-posts">
									<h2>Related Posts </h2>
									<div class="related-posts-bg">
										<ul>
											<li>
												<img class="thumb" src="img/1.jpg"/>
												<h3><a href="">Lorem Ipsum Dolor sit Amet Consectetur..</a></h3>
											</li>

											<li>
												<img class="thumb" src="img/2.jpg"/>
												<h3><a href="">Morbi Vitae Interdum leo Duis luctus Nisl..</a></h3>
											</li>

											<li>
												<img class="thumb" src="img/3.jpg"/>
												<h3><a href="">Phasellus at est Auctor Dolor Porttitors..</a></h3>
											</li>

										</ul>
									</div>
								</div> -->

								<div class="comments">
									<h2>Comments</h2>
								</div>
								
							</div>

						</div>

					</div>

					<div class="navigation">

					</div>

				</div> <!-- main-wrapper -->

				<div class="sidebar-wrapper">

					<?php get_sidebar(); ?>
	
				</div> <!-- sidebar-wrapper -->

			</div> <!-- inner -->
		</div> <!-- Content-wrapper -->
<?php get_footer(); ?>