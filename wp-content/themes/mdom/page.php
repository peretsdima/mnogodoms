<?php
get_header(); ?>
<div id="page">
	<div class="container">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="content text">
			<?php while ( have_posts() ) : the_post(); ?>
				
						<?php the_content(); ?>
						
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>