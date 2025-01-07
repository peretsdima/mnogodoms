<div id="contacts">
	<div class="container">
		<div class="d-flex">
			<div class="col-left">
				<p class="subtitle"><?php _e('Contact us','mdom'); ?></p>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo2.svg" alt="" class="logo" />
				<p class="p1"><?php the_field('about_company','option'); ?></p>
				<p class="p2"><?php the_field('address','option'); ?></p>
				<a href="tel:<?php the_field('phone','option'); ?>" class="p3"><?php the_field('phone','option'); ?></a>
				<a href="mailto:<?php the_field('email','option'); ?>" class="p4"><?php the_field('email','option'); ?></a>
				<p class="p5"><?php the_field('licence','option'); ?></p>
			</div>
			<div class="col-right">
				<div class="form"><?php echo do_shortcode(get_field('form','option')); ?></div>
			</div>
		</div>
	</div>
</div>
		</main>
		<footer>
			<div class="container"><div>
				<div class="d-flex content sb">
					<div class="col1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo2.svg" alt="" class="logo" />
						<p class="dop"><?php the_field('about_company2','option'); ?></p>
					</div>
					<div class="col2">
						<p class="ftitle"><?php _e('Useful links','mdom'); ?></p>
						<?php wp_nav_menu( array( 'theme_location' => 'primary2', 'menu_class' => 'nav-menu', 'container'=>'nav','menu_id' => 'primary2-menu' ) ); ?>
					</div>
					<div class="col3">
						<p class="ftitle"><?php _e('Our contacts','mdom'); ?></p>
						<p class="address"><?php the_field('address','option'); ?></p>
						<div class="line"></div>
						<a href="tel:<?php the_field('phone','option'); ?>" class="a"><?php the_field('phone','option'); ?></a>
						<a href="mailto:<?php the_field('email','option'); ?>" class="a"><?php the_field('email','option'); ?></a>
					</div>
					<div class="col4">
						<p class="ftitle"><?php _e('Follow us','mdom'); ?></p>
						<div class="social d-flex aligncenter">
							<a href="<?php the_field('facebook','option'); ?>" target="_blank"><svg width="10" height="20" viewBox="0 0 10 20" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_621_5298)"><path d="M8.93588 10.4644H5.97449V19.999H2.53045V10.4667H0V6.95486H2.51666C2.51666 5.99761 2.44541 5.09782 2.53735 4.21412C2.61894 3.42924 2.76143 2.60874 3.09009 1.902C3.61871 0.771228 4.63916 0.141488 5.87451 0.0461078C7.02827 -0.0435268 8.19582 0.0265721 9.38635 0.0265721V3.37178C8.74856 3.37178 8.12572 3.36948 7.50172 3.37178C6.28591 3.37638 5.96874 3.69125 5.96759 4.89327C5.96759 5.5414 5.96759 6.19067 5.96759 6.90775H9.45989C9.27948 8.13046 9.1117 9.27272 8.93588 10.4644Z"/></g><defs><clipPath id="clip0_621_5298"><rect width="9.45989" height="20" fill="white"/></clipPath></defs></svg></a>
							<a href="<?php the_field('instagram','option'); ?>" target="_blank"><svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_621_5300)"><path d="M10.4715 0.0180041C12.0346 0.0180041 13.5977 -0.0140662 15.1597 0.0251308C18.0401 0.097586 20.4014 2.52305 20.4133 5.40225C20.4263 8.41092 20.4263 11.4196 20.4133 14.4295C20.4002 17.4524 18.1375 19.8648 15.1074 19.942C11.9835 20.0216 8.85488 20.0228 5.731 19.9408C2.77697 19.86 0.503537 17.4488 0.478593 14.4948C0.453649 11.4469 0.451274 8.39786 0.478593 5.34999C0.504724 2.5183 2.8316 0.124905 5.66448 0.0275064C7.26443 -0.0271319 8.86914 0.0180041 10.4715 0.0180041ZM18.6589 10.0073C18.6589 10.0073 18.6648 10.0073 18.6684 10.0073C18.6684 8.52258 18.6684 7.03665 18.6684 5.55192C18.6684 5.45333 18.6589 5.35355 18.653 5.25497C18.5366 3.41152 17.1183 1.85789 15.2868 1.80444C12.2021 1.71417 9.11263 1.67972 6.02795 1.75574C3.77115 1.81157 2.26622 3.33194 2.23771 5.43195C2.19732 8.46081 2.20089 11.4921 2.24008 14.5209C2.26622 16.5829 3.84241 18.1686 5.90798 18.1983C8.93565 18.2411 11.9645 18.2399 14.9922 18.1983C17.0388 18.1698 18.5746 16.634 18.647 14.5815C18.7005 13.0587 18.6577 11.5324 18.6577 10.0073H18.6589Z" /><path d="M15.5653 10.0106C15.5451 12.8376 13.217 15.1383 10.4031 15.111C7.6166 15.0837 5.32179 12.7603 5.3301 9.97617C5.3396 7.14923 7.68549 4.80809 10.4673 4.84967C13.3215 4.89243 15.5855 7.18367 15.5653 10.0106ZM10.4328 13.3531C12.3036 13.3626 13.8406 11.8315 13.8323 9.96548C13.8252 8.12559 12.3036 6.59572 10.4685 6.58265C8.63928 6.56959 7.09753 8.08996 7.07378 9.92865C7.05002 11.8113 8.55257 13.3435 10.4317 13.3531H10.4328Z" /><path d="M15.8217 5.87598C15.0603 5.86291 14.5223 5.30228 14.552 4.55397C14.5793 3.88881 15.172 3.3353 15.8395 3.35193C16.5403 3.37093 17.1069 3.96602 17.0831 4.66087C17.0594 5.35217 16.5023 5.88786 15.8217 5.87598Z" /></g><defs><clipPath id="clip0_621_5300"><rect width="19.9632" height="20" fill="white" transform="translate(0.459961)"/></clipPath></defs></svg></a>
							<a href="<?php the_field('telegram','option'); ?>" target="_blank"><svg width="22" height="18" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_621_5308)"><path d="M8.54724 16.867C8.61229 15.9047 8.67446 14.9684 8.73951 14.0325C8.78336 13.3998 8.83444 12.7676 8.87299 12.1344C8.88504 11.9387 8.95395 11.7956 9.10478 11.6611C11.1649 9.82082 13.2187 7.97422 15.2744 6.12906C16.1948 5.3031 17.1181 4.48052 18.0308 3.64685C18.1219 3.56349 18.1518 3.41265 18.2101 3.29315C18.0679 3.27965 17.9161 3.22857 17.7865 3.2623C17.6207 3.30519 17.4665 3.40735 17.3176 3.50036C13.649 5.79463 9.98134 8.09035 6.31657 10.3904C6.16526 10.4853 6.03756 10.4993 5.8689 10.4463C4.36926 9.97357 2.86577 9.51144 1.36564 9.03967C1.15265 8.97269 0.937727 8.89221 0.747381 8.77849C0.352232 8.54236 0.310307 8.16119 0.669797 7.87398C0.916042 7.67785 1.20758 7.52076 1.50202 7.40559C3.34091 6.68805 5.18606 5.98739 7.02977 5.28142C9.83966 4.20536 12.6505 3.13027 15.4604 2.05373C17.0791 1.43402 18.6968 0.812381 20.3154 0.19219C20.4427 0.143519 20.5699 0.0924386 20.701 0.0553332C21.4358 -0.150915 21.9746 0.226404 22.0088 0.98827C22.0189 1.21765 21.9871 1.45378 21.9389 1.67978C20.9168 6.49096 19.8899 11.3017 18.863 16.1119C18.7927 16.4415 18.7382 16.7764 18.6399 17.0973C18.3571 18.0211 17.6405 18.2625 16.8463 17.6958C15.9447 17.0525 15.0561 16.3899 14.1622 15.7355C13.4755 15.2329 12.7864 14.7332 12.1045 14.2243C11.9744 14.127 11.8964 14.1376 11.7817 14.2484C11.0025 15.0021 10.216 15.748 9.43295 16.4979C9.19393 16.7268 8.92841 16.8882 8.54772 16.8665L8.54724 16.867Z" /></g><defs><clipPath id="clip0_621_5308"><rect width="21.5867" height="18" fill="white" transform="translate(0.422852)"/></clipPath></defs></svg></a>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary3', 'menu_class' => 'nav-menu', 'container'=>'nav','menu_id' => 'primary3-menu' ) ); ?>
					</div>
				</div>
			</div></div>
			<p class="copy">© <?php _e('Powered by Mnogodoms','mdom'); ?> <?php echo date('Y'); ?></p>
		</footer>
	<?php wp_footer(); ?>
	<div id="form">
		<div class="d-flex">
			<div class="col-left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/form.jpg" alt="" />
			</div>
			<div class="col-right">
				<p class="title"><?php _e('Book a call','mdom'); ?></p>
				<div class="form"><?php echo do_shortcode(get_field('form','option')); ?></div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>