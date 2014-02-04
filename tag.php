<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">

			<div id="grid" class="span12 spread" data-columns>
				
			<?php

				if ( have_posts() ) :
					
					while ( have_posts() ) : the_post(); ?>
				
						<article class="post">
							
							<div class="thumb">
								<?php the_post_thumbnail( 'featured-thumb' ); ?>
							</div>
								
							<div class="content">
								
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
								<span class="date"><?php the_date(); ?></span>

								<?php the_excerpt(); ?>
							</div>
							
						</article>
						
				<?php endwhile; ?>

			</div>

			<?php endif; ?>	
		
		</section>	
			
		<?php get_sidebar(); ?>
		
	</div>

<?php
	get_footer();