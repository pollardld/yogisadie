		</div>
	</main>

	<div class="testimonials">

		<div class="testimonial">

			<div id="slider" class="swipe">

				<div class="swipe-wrap">

					<?php

						if ( have_posts() ) :

							$args3 = array(
								'category__in'	=> '5'
							);

							query_posts( $args3 );
							
							while ( have_posts() ) : the_post(); ?>
									
								<div>
																																	
									<?php the_content(); ?>

									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									
								</div>
						
					<?php endwhile; ?>

					<?php 
						wp_reset_query();
						endif; ?>
				</div>
			</div>
		</div>

		<section class="post-nav">
			<div class="previous" onclick="mySwipe.prev();">«&nbsp;&nbsp;&nbsp;&nbsp;Prev&nbsp;&nbsp;&nbsp;&nbsp;|</div>
			<div class="next" onclick="mySwipe.next();">&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;»</div>
		</section>

	</div>

	<footer class="footer">

		<main>

			<blockquote class="span6">
				© 2013 Sadie Chanlett-Avery
			</blockquote>

			<nav class="social span6" role="social">
				
				<div>
					<a href="https://twitter.com/yogisadie" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false" data-lang="en">Follow</a>
				</div>
				
				<div class="fb-like" data-href="https://www.facebook.com/yogisadie?fref=ts" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>	

			</nav>
		</main>

	</footer>
<?php wp_footer(); ?>
</body>
</html>