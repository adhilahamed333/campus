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
				<h2>Academic Details</h2><br><br>
				<?php if(count($posts)):?>
					<?php foreach($posts as $post): ?>
							<div class="col-md-6 col-xs-6 w3l-left-mk">
								<ul>
									<li class="text">Name of Applicant :  </li>
									<li class="agileits-main"><input type="text"  value="<?php echo $post->std_name; ?>" readonly></li>
									<li class="text">Admission No  :  </li>
									<li class="agileits-main"></i><input  type="email" name="email" value="<?php echo $post->admission_no; ?>" readonly></li>
								</ul>
							</div>
							<div class="col-md-6 col-xs-6 w3l-right-mk">
								<ul>
									<li class="text">Current Semester  :  </li>
									<li class="agileits-main"><input type="text" value="<?php echo $post->semester; ?>" readonly></li>
									<li class="text">Total Credits  :  </li>
									<li class="agileits-main"><input type="text" value="<?php echo $post->std_credits; ?>" readonly></li>
								</ul>
							</div><br><br>

							<h2>Semester Credits</h2><br><br>

							<div class="col-md-6 col-xs-6 w3l-left-mk">
							<?php if(count($posts)):?>
								<ul><?php foreach($credits as $cr): ?>
								 <?php endforeach; ?>
									<?php endif;?>
									<?php if ($credits->first_sem > 0): ?>
								
 
										<li class="text">First Semester :  </li>
										<li class="agileits-main"><input type="text" value="<?php echo $credits->first_sem; ?>" readonly></li>
									

									<?php endif; ?>
									<?php if ($credits->third_sem > 0): ?>
										<li class="text">Third Semester  :  </li>
										<li class="agileits-main"></i><input  type="email" value="<?php echo $credits->third_sem; ?>" readonly></li>
									<?php endif; ?>
									<?php if ($credits->fifth_sem > 0): ?>
										<li class="text">Fifth Semester :  </li>
										<li class="agileits-main"><input type="text" value="<?php echo $credits->fifth_sem; ?>" readonly></li>
									<?php endif; ?>
									<?php if ($credits->seventh_sem > 0): ?>
										<li class="text">Seventh Semester  :  </li>
										<li class="agileits-main"></i><input  type="email" value="<?php echo $credits->seventh_sem; ?>" readonly></li>
									<?php endif; ?>
								</ul>
							</div>
							<div class="col-md-6 col-xs-6 w3l-right-mk">
								<ul>
									<?php if ($credits->sec_sem > 0): ?>
										<li class="text">Second Semester  :  </li>
										<li class="agileits-main"><input type="text" value="<?php echo $credits->sec_sem; ?>" readonly></li>
									<?php endif; ?>
									<?php if ($credits->forth_sem > 0): ?>
										<li class="text">Forth Credits  :  </li>
										<li class="agileits-main"><input type="text" value="<?php echo $credits->forth_sem; ?>" readonly></li>
									<?php endif; ?>
									<?php if ($credits->sixth_sem > 0): ?>
										<li class="text">Sixth Semester  :  </li>
										<li class="agileits-main"><input type="text" value="<?php echo $credits->sixth_sem; ?>" readonly></li>
									<?php endif; ?>
									<?php if ($credits->eighth_sem > 0): ?>
										<li class="text">Eighth Semester  :  </li>
										<li class="agileits-main"><input type="text" value="<?php echo $credits->eighth_sem; ?>" readonly></li>
									<?php endif; ?>
								</ul>
							</div>

							<div class="col-md-6 col-xs-6 w3l-right-mk">
							<h1 class="text-danger">Due Details</h1>							
 <?php
      if (count($posts_due)):
        foreach ($posts_due as $d):
       ?>
		<p><h5><?php echo $d->amount; ?> rupee pending in 
		<?php echo $d->type; ?></h5></p>
		<?php endforeach;
      endif;
     ?>
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
