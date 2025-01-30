<?php

/* Template Name:Home */

get_header(); ?>
<div id="banner" style="background:url(<?php the_field('banner'); ?>) no-repeat center center;background-size:cover;"><div>
	<div class="container">
		<h1><?php the_field('title'); ?></h1>
		<p class="desc"><?php the_field('description'); ?></p>
		<a href="#form" data-fancybox class="btn"><?php _e('Сontact us today','mdom'); ?></a>
	</div>
</div></div>
<div id="prop">
	<div class="container">
		<p class="subtitle"><?php the_field('subtitle2'); ?></p>
		<div class="tt d-flex sb aligncenter">
			<p class="section-title"><?php the_field('title2'); ?></p>
			<a href="<?php the_field('link2'); ?>" class="more"><span><?php _e('View all','mdom'); ?></span></a>
		</div>
		<div class="props d-flex">
			<?php foreach(get_field('properties') as $post) { setup_postdata($post); ?>
				<div class="prop">
					<div class="img">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
						<?php if(get_field('labels')) { ?>
							<div class="labels l<?php echo count(get_field('labels')); ?>">
								<?php foreach(get_field('labels') as $l) { ?>
									<p><?php echo $l['label']; ?></p>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="content">
						<p class="location"><?php the_field('location'); ?></p>
						<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
						<div class="info d-flex aligncenter fw">
							<p class="bed"><?php the_field('beds'); ?><?php _e('beds','mdom'); ?></p>
							<p class="bath"><?php the_field('baths'); ?><?php _e('baths','mdom'); ?></p>
							<p class="area"><?php the_field('area'); ?><?php _e('m2','mdom'); ?></p>
						</div>
						<p class="price"><?php the_field('price'); ?></p>
					</div>
					<div class="text-right">
						<a href="<?php the_permalink(); ?>" class="am more"><span><?php _e('See more','mdom'); ?></span></a>
					</div>
				</div>
			<?php } wp_reset_postdata(); ?>
		</div>
	</div>
</div>
<div id="desc1">
	<div class="d-flex aligncenter">
		<div class="col-left">
			<div class="content"><div>
				<p class="subtitle"><?php the_field('subtitle3'); ?></p>
				<p class="section-title"><?php the_field('title3'); ?></p>
				<div class="desc">
					<?php the_field('description3'); ?>
				</div>
			</div></div>
		</div>
		<div class="col-right">
			<img src="<?php the_field('image3'); ?>" alt="" />
		</div>
	</div>
</div>
<div id="services">
	<div class="container">
		<p class="subtitle"><?php the_field('subtitle4'); ?></p>
		<p class="section-title"><?php the_field('title4'); ?></p>
		<div class="content">
			<div class="services d-flex fw">
				<?php foreach(get_field('services') as $s) { ?>
					<div>
						<div class="img"><img src="<?php echo $s['icon']; ?>" alt="" /></div>
						<p class="title"><?php echo $s['title']; ?></p>
						<div class="desc"><?php echo $s['description']; ?></div>
						<!-- <a href="<?php the_permalink(); ?>" class="am more"><span><?php _e('See more','mdom'); ?></span></a> -->
						<p class="dop"><?php _e('*leave your request for the service you are looking for and our manager will provide you with an answer in a short time','mdom'); ?></p>
						<a href="#form" data-fancybox class="btn2"><?php _e('Book a Call','mdom'); ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div id="visa">
	<div>
		<div class="container">
			<p class="subtitle"><?php the_field('subtitle5'); ?></p>
			<p class="section-title"><?php the_field('title5'); ?></p>
			<div class="visas d-flex">
				<?php foreach(get_field('visas') as $v) { ?>
					<div>
						<img src="<?php echo $v['image']; ?>" alt="" />
						<p><?php echo $v['title']; ?></p>
					</div>
				<?php } ?>
			</div>
			<div class="tab-content">
				<?php foreach(get_field('visas') as $v) { ?>
					<div>
						<div class="d-flex sb">
							<div class="col-left"><div>
								<p class="title"><?php echo $v['title']; ?></p>
								<p class="title2"><?php echo $v['subtitle']; ?></p>
								<div class="desc"><?php echo $v['description']; ?></div>
							</div></div>
							<div class="col-right">
								<div class="sl">
									<?php foreach($v['gallery'] as $g) { ?>
										<div><img src="<?php echo $g; ?>" alt="" /></div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div id="golden">
	<div class="container">
		<p class="section-title"><?php the_field('title6'); ?></p>
		<p class="title2"><?php the_field('subtitle6'); ?></p>
		<div class="golden d-flex fw">
			<?php foreach(get_field('golden_visa') as $g) { ?>
				<div class="d-flex aligncenter">
					<div><img src="<?php echo $g['icon']; ?>" alt="" /></div>
					<p><?php echo $g['title']; ?></p>
				</div>
			<?php } ?>
		</div>
		<p class="dop"><?php the_field('additional'); ?></p>
	</div>
</div>
<div id="funds">
	<div class="d-flex aligncenter">
		<div class="col-left">
			<img src="<?php the_field('image7'); ?>" alt="" />
		</div>
		<div class="col-right">
			<div class="content"><div>
				<p class="section-title"><?php the_field('title7'); ?></p>
				<div class="desc"><?php the_field('description7'); ?></div>
			</div></div>
		</div>
	</div>
</div>
<div id="types">
	<div class="container">
		<p class="subtitle"><?php the_field('subtitle8'); ?></p>
		<p class="section-title"><?php the_field('title8'); ?></p>
		<div class="types">
			<?php foreach(get_field('type_of_visa') as $t) { ?>
				<div class="type">
					<div class="head d-flex aligncenter sb">
						<p class="st"><?php echo $t['short_title']; ?></p>
						<p class="title"><span><?php echo $t['subtitle']; ?></span><?php echo $t['title']; ?></p>
						<span class="arrow"></span>
					</div>
					<div class="desc"><div><?php echo $t['description']; ?></div></div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div id="regions">
	<div class="container">
		<p class="subtitle"><?php the_field('subtitle9'); ?></p>
		<p class="section-title"><?php the_field('title9'); ?></p>
	</div>
	<div class="d-flex">
		<div class="col-left">
			<div class="map">
				<?php include('map.php'); ?>
				<div><?php $index=1; foreach(get_field('regions') as $r) { ?>
					<p class="m m<?php echo $index; ?>" data-id="<?php echo $index; ?>"><?php echo $r['title']; ?></p>
				<?php $index++; } ?></div>
			</div>
		</div>
		<div class="col-right">
			<div class="content">
				<?php foreach(get_field('regions') as $r) { ?>
					<div class="reg">
						<div class="img"><img src="<?php echo $r['image']; ?>" alt="" />
							<p><img src="<?php echo get_template_directory_uri(); ?>/images/icon6.svg" alt="" /><?php echo $r['title']; ?></p>
						</div>
						<div class="content2">
							<div class="info">
								<p class="pop pop1"><?php _e('population','mdom'); ?> <span><?php echo $r['population']; ?></span></p>
								<p class="pop pop2"><?php _e('tourism region','mdom'); ?> <span><?php if($r['tourism']) { ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon9.svg" alt="" /><?php }else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon91.svg" alt="" /><?php } ?></span></p>
								<p class="pop pop3"><?php _e('average temperature','mdom'); ?> <span><?php echo $r['temperature']; ?></span></p>
							</div>
							<a href="<?php echo $r['link']; ?>" class="btn btn4"><?php _e('See more','mdom'); ?></a>
							<p class="dop"><span><?php _e('Our specialists will select','mdom'); ?></span><br/><span><?php _e('the best real estate option for you','mdom'); ?></span></p>
							<a href="#form" data-fancybox class="btn btn3"><?php _e('Сontact us today','mdom'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>