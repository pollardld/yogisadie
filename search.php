<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">

			<div id="grid" class="span12 spread" data-columns>
			
			<?php if ( have_posts() ) : ?>

				<h1 class="cat-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>

				<?php while ( have_posts() ) : the_post(); ?>
				
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

				<?php 
					endwhile; 

					else :
						if ( is_search() ) :
							_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfourteen' );
							get_search_form();

						else :
							_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfourteen' );
						
							get_search_form();

						endif;

				endif; ?>	

			</div>
		
		</section>
			
		<?php get_sidebar(); ?>
		
	</div>

<?php
	get_footer();