<?php
get_header(); ?>
<div id="sprop">
	<div class="container">
		<a href="" class="back"><?php _e('Back to search results','mdom'); ?></a>
		<div class="d-flex">
			<div class="col-left">
				<?php if(get_field('gallery')) { ?><div class="mgallery">
					<?php foreach(get_field('gallery') as $g) { ?>
						<div><img src="<?php echo $g['sizes']['large']; ?>" alt="" /></div>
					<?php } ?>
				</div>
				<div class="dgallery">
					<?php foreach(get_field('gallery') as $g) { ?>
						<div><img src="<?php echo $g['sizes']['medium']; ?>" alt="" /></div>
					<?php } ?>
				</div><?php } ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<p class="price"><?php the_field('price'); ?></p>
				<div class="attr fw d-flex aligncenter">
					<p class="bed"><?php the_field('beds'); ?><?php _e('beds','mdom'); ?></p>
					<p class="bath"><?php the_field('baths'); ?><?php _e('baths','mdom'); ?></p>
					<p class="area"><?php the_field('area'); ?><?php _e('m2','mdom'); ?></p>
					<?php if(get_field('labels')) { foreach(get_field('labels') as $f) { ?>
						<p><img src="<?php echo $f['icon']; ?>" alt="" /><?php echo $f['label']; ?></p>
					<?php }} ?>
				</div>
				<a class="tomap"><?php _e('Location on the map','mdom'); ?></a>
				<div class="line"></div>
				<?php if(get_field('extra_features')) { ?><div class="extra">
					<p class="stitle"><?php _e('Extra Features','mdom'); ?></p>
					<div class="list">
						<?php foreach(get_field('extra_features') as $e) { ?>
							<p><?php echo $e['label']; ?></p>
						<?php } ?>
					</div>
				</div><?php } ?>
				<div class="content text">
					<p class="stitle"><?php _e('Property Description','mdom'); ?></p>
					<?php while ( have_posts() ) : the_post(); ?>						
						<?php the_content(); ?>								
					<?php endwhile; ?>
				</div>
				<div class="bottom d-flex sb aligncenter">
					<p class="dop"><span><?php _e('If you have any questions, remember ','mdom'); ?></span><br/><span><?php _e('that you can contact Mnogodoms by message','mdom'); ?></span></p>
					<a href="#form" data-fancybox class="btn btn3"><?php _e('Сontact us today','mdom'); ?></a>
				</div>
			</div>
			<div class="col-right">
				<div class="form">
					<p class="title"><?php _e('Write to us','mdom'); ?></p>
					<?php echo do_shortcode(get_field('form2','option')); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if(get_field('map')) { ?>
	<div id="map">
		<div class="container">
			<div class="map">
				<p class="stitle"><?php _e('Approximate location','mdom'); ?></p>
				<p class="loc"><?php the_field('location'); ?></p>
				<?php the_field('map'); ?>
			</div>
		</div>
	</div>
<?php } ?>
<?php get_footer(); ?>