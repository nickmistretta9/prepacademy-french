<footer class="site-footer">
	<div class="container-fluid">
		<div class="flex">
			<div class="links">
				<ul>
					<a href="<?php echo home_url('/comment-nous-travaillons'); ?>">
						<li>Comment Nous Travaillons</li>
					</a>
					<a href="http://prepacadtutors.wpengine.com/find-your-local-tutor">
						<li>Autres Adresses</li>
					</a>
					<a href="<?php echo home_url('/blog'); ?>">
						<li>Blog</li>
					</a>
					<a href="<?php echo home_url('/contactez-nous'); ?>">
						<li>Contact</li>
					</a>
					<a href="http://franchise.prepacadtutors.wpengine.com">
						<li>Franchise Opportunities</li>
					</a>
				</ul>
			</div>
			<div class="contact">
				<a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.png"></a> <br>
				<a href="http://www.prepacademytutors.com">http://www.prepacademytutors.com/</a> <br>
				<div class="copy"><i class="fa fa-copyright"></i> All Rights Reserved. </div>
				<a class="phone" href="tel:450-915-1196">450.915.1196</a> <br>
			</div>
			<div class="map">
				<div class="directions">
					<h3>Prep Academy Tutors:</h3>
					<span>201 Wicksteed Ave, Unit 12, Toronto, On, M4G 0B1</span> <br>
				</div>
				<a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/dist/images/scorp-logo.png" alt=""></a>
			</div>
		</div>
	</div>
</footer>

</div><!-- /st-content-inner -->
</div><!-- /st-content -->
</div><!-- /st-pusher -->
</div><!-- /st-container -->

<!-- build:js js/script.min.js -->
<script src="<?php bloginfo('template_directory'); ?>/dist/js/script.min.js"></script>
<!-- endbuild -->
<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqTD8-lvnh9Ur-ARjyvu96SHihwsUoRDg&callback=initMap" async defer></script>

<?php wp_footer(); ?>
</body>
</html>