<?php $this->load->view('student/header') ?>
<body>
<!-- banner -->
	<div class="banner-1">
		<div class="header agileinfo-header"><!-- header -->
			<?php $this->load->view('student/navbar') ?>
		</div><!-- //header -->

	</div>
<div class="about-bottom">

	<div class="col-md-12 w3l_about_bottom_right one">
		<div class="abt-w3l">
			<div class="header-w3l">
				<h2>Admission Details</h2><br><br>
				<?php if(count($posts)):?>
					<?php foreach($posts as $post): ?>
					  <?php echo form_open("Student/stdupdate/{$post->std_id}",array('class' =>'mod2')); ?>
							<div class="col-md-6 col-xs-6 w3l-left-mk">
								<ul>
									<li class="text">Name of Applicant :  </li>
									<li class="agileits-main"><input type="text"  value="<?php echo $post->std_name; ?>" readonly></li>
									<li class="text">Date of Birth :  </li>
									<li class="agileits-main"></i><input class="date"  type="text"  value="<?php echo $post->dob; ?>" readonly></li>
									<li class="text">Admission No  :  </li>
									<li class="agileits-main"></i><input  type="email" name="email" value="<?php echo $post->admission_no; ?>" readonly></li>
									<li class="text">Course  :  </li>
									<li class="agileits-main"><input type="text" value="<?php echo $post->branch; ?>" readonly></li>
								</ul>
							</div>
							<div class="col-md-6 col-xs-6 w3l-right-mk">
								<ul>
									<li class="text">Date Of Joining  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->dateofjoining; ?>" type="text" readonly></li>
									<li class="text">Date Of Leaving  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->dateofleaving; ?>" type="text"  readonly></li>
									<li class="text">University Register No  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->universityregno; ?>" type="text"  readonly></li>
									
								</ul>
							</div>
							<div class="clearfix"></div>
						<?php echo form_close(); ?>
					<?php endforeach;?>

					<?php endif;?>

			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- contact -->
	<!-- //contact -->
	<!-- footer start here -->
	<?php $this->load->view('student/footer') ?>
