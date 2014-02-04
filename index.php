<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<div class="spread">
			
			<section class="span8">
			
				<div class="featured-post span12">
			
					<?php 
						$sticky = get_option( 'sticky_posts' );
						
						$args = array(
							'posts_per_page' => 1,
							'post__in'  => $sticky,
							'ignore_sticky_posts' => 1
						);
						
						query_posts( $args );
											
						while ( have_posts() ) : the_post(); ?>

							<article class="post">
							
								<?php the_post_thumbnail( 'featured-thumb' ); ?>
									
								<h1>
									<?php the_title(); ?>
									<hr class="light">
									<hr class="dark">
									<a href="<//?php the_permalink(); ?>"><span>read more »</span></a>
								</h1>

							</article>
					<?php 
						endwhile;
					wp_reset_query();
				endif; ?>

			</div>

			<blockquote class="desc"><h3>Humans move by design.</h3>
			<hr class="light">
			<hr class="dark">
			We've adapted to sitting but it's time to evolve. You don't need a gym, be able to touch your toes, or wear spandex. You don't need to be perfect to activate a dose of movement medicine.</blockquote>

			<div id="grid" class="span12 spread" data-columns>
				
				<?php
					// Rewinding the posts
					rewind_posts();

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args2 = array(
						'posts_per_page'=> 8,
						'post__not_in'	=> get_option( 'sticky_posts' ),
						'category__not_in'	=> '5',
						'paged' => $paged
					);

					$the_query = new WP_Query( $args2 );

					if ( $the_query->have_posts() ) :
					
						while ( $the_query->have_posts() ) : $the_query->the_post();

							if ( in_category( 'class-workshops' )) { ?>
								
								<article class="post workshop-post newpost">

									<div class="pattern">
										<h3>Upcoming Workshop</h3>

										<span class="date"><?php echo get_the_date(); ?></span>
									
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</div>

									<div class="content">
										<?php the_excerpt(); ?>
									</div>
									
								</article>
					
					<?php } else { ?>
					
								<article class="post newpost">
									
									<div class="thumb">
										<?php the_post_thumbnail( 'featured-thumb' ); ?>
									</div>
										
									<div class="content">
										
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									
										<span class="date"><?php the_time('M d'); ?></span>

										<?php the_excerpt(); ?>
									</div>
									
								</article>
							
					<?php 
							} 
						endwhile; 
					?>

				</div>

				<section class="post-nav">
					<div class="previous"><?php previous_posts_link('«&nbsp;&nbsp;&nbsp;&nbsp;Prev&nbsp;&nbsp;&nbsp;&nbsp;'); ?></div>
					<div class="next"><?php next_posts_link('|&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;»');?></div>
				</section>

				<?php 
					wp_reset_postdata();
				endif; ?>	
		
			</section>
			
			
			<?php get_sidebar(); ?>
		
		</div>

<?php
	get_footer();