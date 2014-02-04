<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">

			<div class="span12 content">
				
				<?php

					if ( have_posts() ) :
					
					while ( have_posts() ) : the_post(); ?>
					
						<header class="pg-header">
							<h2><?php the_title(); ?></h2>
						</header>
				
						<article class="post">

							<?php the_content(); ?>
							
						</article>
						
				<?php endwhile; ?>

			</div>

			<?php endif; ?>	
		
			</section>
			
			
			<?php get_sidebar(); ?>
		
		</div>

<?php
	get_footer();