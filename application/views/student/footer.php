<!-- footer start here -->
	<div class="footer-agile">
		<div class="container">
			<div class="footer-btm-agileinfo">
				<div class="col-md-3 col-xs-3 footer-grid w3social">
					<h3>Our Links</h3>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="" >About</a></li>
						<li><a href="">Portfolio</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-3 footer-grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="fa fa-map-marker"></i>+012 345 6789</li>
						<li><i class="fa fa-fax"></i>+987 654 3210</li>
						<li><i class="fa fa-phone"></i>St, NY 10002, Idukki.</li>
						<li><i class="fa fa-envelope-o"></i><a href="">campus@example.com</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-xs-6 footer-grid footer-review">
					<h3>About us</h3>
					<p>For all our students</p>
					<p class="w3l-para-mk">We present</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-agilem">
				<div class="col-sm-8 col-xs-9 copy-w3lsright">
					<p>© 2020 CAMPUS. All rights reserved | Design by <a href="">CAMPUS</a></p>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer end here -->

	<!-- FlexSlider -->
	<script defer src="<?php echo base_url(); ?>assets/assets2/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
	<!-- End-slider-script -->
<!-- Flexisel-js for-testimonials -->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:1,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems:1
										},
										tablet: {
											changePoint:768,
											visibleItems: 1
										}
									}
								});

							});
					</script>
					<script type="text/javascript" src="<?php echo base_url(); ?>assets/assets2/js/jquery.flexisel.js"></script>
<!-- Flexisel-js for-testimonials -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- stats -->
	<script src="<?php echo base_url(); ?>assets/assets2/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets2/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
<!-- start-smooth-scrolling -->
<script src="<?php echo base_url(); ?>assets/assets2/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/assets2/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/assets2/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //end-smooth-scrolling   -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>

	<script>
	$(document).ready(function() {
			$('#staff').DataTable();
	} );
	</script>
	<script src="<?php echo base_url(); ?>assets/assets2/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets2/datatables/jquery.dataTables.min.js"></script>
	<!-- //smooth-scrolling-of-move-up -->
    <script src="<?php echo base_url(); ?>assets/assets2/js/bootstrap.js"></script>
</body>
</html>
