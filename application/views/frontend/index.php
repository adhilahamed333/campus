<?php $this->load->view('frontend/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/toast/toastr.min.css'); ?>">

<script type="text/javascript" src="<?php echo base_url('assets/toast/jquery-3.4.1.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/toast/toastr.min.js'); ?>"></script>
<body>
<!-- banner -->
	<div class="banner">
		<div class="header agileinfo-header"><!-- header -->
			<?php $this->load->view('frontend/navbar'); ?>
		</div><!-- //header -->

		<?php if($this->session->flashdata('errormsg')) { ?>
			<script>
			 $(document).ready(function(){
				 toastr.options = {
					 "closeButton": true,
					 "debug": false,
					 "newestOnTop": false,
					 "progressBar": true,
					 "positionClass": "toast-top-right",
					 "preventDuplicates": false,
					 "onclick": null,
					 "showDuration": "300",
					 "hideDuration": "1000",
					 "timeOut": "5000",
					 "extendedTimeOut": "1000",
					 "showEasing": "swing",
					 "hideEasing": "linear",
					 "showMethod": "fadeIn",
					 "hideMethod": "fadeOut"
				 }

				 toastr["error"]("Check your Username & Password", "Failed To Login")

			 })
		 </script>

		<?php }else{if($this->session->flashdata('success')){ ?>
			<div class="alert alert-dismissible alert-success">
					 <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
					 <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
			</div>
			<?php } }?>
		<!-- banner-text -->
		<div class="banner-text">
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">
								<h3>Creative Thinking & Innovation</h3>
								<p>A university is just a group of buildings gathered around a library.</p>

							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>Your Education your way </h3>
								<p>A university is just a group of buildings gathered around a library.</p>

							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>A Wide Variety of Activities </h3>
								<p>A university is just a group of buildings gathered around a library.</p>

							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- modal popup -->

<!-- staff login -->
	<div class="stats" id="stafflogin">
		<div class="container">
			<div class="w3-hed-all">
			<h3>staff login</h3>
		    </div>
			<div class="col-md-6 w3_stats_left">
				<h3>Login Staff</h3>
				<br><br>
				<?php echo form_open_multipart('Front/staff_login',array('class'=>'form-horizontal')); ?>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text" class="form-control" style="width: 90%" name="username" placeholder="Enter username">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" style="width: 90%" name="password" placeholder="Password">
				  </div>
						<input type="submit" name="submit" class="btn btn-primary" value="Log in">
					<?php echo form_close() ;?>

			</div>

				<!-- <div class="col-md-3 stats_inner_grids">
					<div class="stats_left counter_grid">
						<i class="fa fa-question-circle-o" aria-hidden="true"></i>
						<p class="counter">145</p>
						<h4>Learners</h4>
					</div>
					<div class="stats_left counter_grid1">
						<i class="fa fa-video-camera" aria-hidden="true"></i>
						<p class="counter">365</p>
						<h4>University partners</h4>
					</div>
					<div class="stats_left counter_grid2">
						<i class="fa fa-user" aria-hidden="true"></i>
						<p class="counter">563</p>
						<h4>Professionals</h4>
					</div>
				</div> -->
					<div class="col-md-6 w3_stats_right">
					</div>

					<div class="clearfix"> </div>


		</div>
	</div>
<!--sevices-->
	<div class="sevices-w3layouts" id="services">
		<div class="container">
		<div class="w3-hed-all w3-hed-services">
			<h3>Our Services</h3>
		</div>
			<div class="row">
				<div class="col-md-4 sevices-grid text-right">
					<div class="icon">
					<span class="fa fa-book" aria-hidden="true"></span>
						<h4>Education Organization</h4>
					</div>

				</div>
				<div class="col-md-4 sevices-grid text-center">
					<div class="icon">
						<span class="fa fa-graduation-cap" aria-hidden="true"></span>
						<h4>Online Classes</h4>
					</div>
				</div>
				<div class="col-md-4 sevices-grid text-left">
					<div class="icon">
						<span class="fa fa-users" aria-hidden="true"></span>
						<h4>Sports Club</h4>
					</div>
				</div>
				<div class="col-md-6 sevices-grid text-right">
					<div class="icon">
						<span class="fa fa-bus" aria-hidden="true"></span>
						<h4>Great Support</h4>
					</div>
				</div>
				<div class="col-md-6 sevices-grid text-left">
					<div class="icon">
						<span class="fa fa-users" aria-hidden="true"></span>
						<h4>Events Club</h4>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//sevices-->
<!-- stats -->

	<!-- //stats -->
	<!-- testimonials -->

<!-- //testimonials -->
<?php $this->load->view('frontend/footer'); ?>
