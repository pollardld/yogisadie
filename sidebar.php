<aside class="span4">

	<section class="subscribe">
		<h2>Inspiration Delivered</h2>
		<p>Receive newsletters and updates.</p>
		<hr class="light">
		<hr class="dark">
		<!-- Begin MailChimp Signup Form -->
		<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
			<input type="submit" value="JOIN" name="subscribe" id="mc-embedded-subscribe" class="button">
		</form>
		<!--End mc_embed_signup-->
	</section>

	<section class="side-nav">
		<ul class="nav-list">
			<li class="menu-item"><a href="/about/">About</a></li>
			<li class="menu-item"><a href="/contact/">Contact</a></li>
		</ul>
	</section>

	<?php if ( !is_category('class-workshops') ) { ?>

		<section class="schedule">
			<a href="/category/class-workshops/"><h3>Class + Workshops</h3></a>
			<?php 
				rewind_posts();

				$args3 = array(
							'category_name'	=> 'class-workshops',
							'meta_key' => 'workshop_date',
							'orderby' => 'meta_value_num', 
							'order' => 'ASC'
						);

				$the_query3 = new WP_Query( $args3 );

				if ( $the_query3->have_posts() ) :
						
					while ( $the_query3->have_posts() ) : $the_query3->the_post(); ?>

					<div>
						<hr class="light">
						<?php the_field('workshop_date'); ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					 
				<?php 
					endwhile;
					wp_reset_query();
				endif; 
			?>
		</section>

	<?php } ?>

	<section class="podcast">
		<h3>Poscast</h3>
		<h2>Leaders of the Movement</h2>
		<p>Inspiration from fitness, yoga, &amp; health pioneers.</p>
		<a href="/category/podcasts/">Listen Now</a>
		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/sadie-head.png">
	</section>

	<section class="search">
		<h3>Search</h3>
		<hr class="light">
		<hr class="dark">
		<?php get_search_form(); ?>
	</section>
		
</aside>