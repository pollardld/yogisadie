<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article class="post">
					
					<div class="thumb">
						<?php the_post_thumbnail( 'featured-thumb' ); ?>
					</div>
						
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<span class="date"><?php the_date(''); ?></span>
					<span class="date"><?php the_category(',','single'); ?></span>

					<?php the_content(); ?>
					
					<div class="tags"><?php the_tags(); ?></div>

					<div class="comments">

						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-colorscheme="light"></div>
						
					</div>

				</article>
			
			<?php endwhile; ?>	
		
		</section>
			
		<?php get_sidebar(); ?>
		
	</div>

<?php
	get_footer();