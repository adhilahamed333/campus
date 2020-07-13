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
				<h2>Personal Details</h2><br><br>

				<div class="">
					<a href="<?php echo base_url('Student/personalprofile'); ?>">
						<button type="button" class="btn btn-info">Back</button>
					</a>
				</div><br><br>


				<?php if(count($posts)):?>
					<?php foreach($posts as $post): ?>
					  <?php echo form_open("Student/stdupdate/{$post->std2_id}",array('class' =>'mod2')); ?>
							<div class="col-md-4 col-xs-4 w3l-left-mk">
								<ul>
									<input type="hidden" name="std_id" value="<?php echo $this->session->userdata('user_id'); ?>">
									<li class="text">Phone Number :  </li>
									<li class="agileits-main"><input type="text" name="phone" value="<?php echo $post->phone; ?>" required></li>
									<li class="text">Address :  </li>
									<li class="agileits-main"></i><input class="date" name="address" type="text"  value="<?php echo $post->address; ?>" required></li>
									<li class="text">Email :  </li>
									<li class="agileits-main"></i><input  type="email" name="email" value="<?php echo $post->email; ?>" required ></li>
									<li class="text">Category :  </li>
									<li class="agileits-main"><input type="text" name="category" value="<?php echo $post->category; ?>" required ></li>
								</ul>
							</div>
							<div class="col-md-4 col-xs-4 w3l-right-mk">
								<ul>
									<li class="text">Name Of Father / Mother  :  </li>
									<li class="agileits-main"><input name="fath_moth" value="<?php echo $post->fath_moth; ?>" type="text" required ></li>
									<li class="text">Occupation Of Father / Mother  :  </li>
									<li class="agileits-main"><input name="occupationfath_moth" value="<?php echo $post->occupationfath_moth; ?>" type="text" required ></li>
									<li class="text">Phonenumber Of Father / Mother :  </li>
									<li class="agileits-main"><input name="phnofath_moth" value="<?php echo $post->phnofath_moth; ?>" type="text" required ></li>
									<li class="text">Email Of Father / Mother :  </li>
									<li class="agileits-main"><input name="emailfath_moth" value="<?php echo $post->emailfath_moth; ?>" type="text" required ></li>
								</ul>
							</div>
							<div class="col-md-4 col-xs-4 w3l-right-mk">
								<ul>
									<li class="text">Name Of Guardian  :  </li>
									<li class="agileits-main"><input name="lgname" value="<?php echo $post->lgname; ?>" type="text" required ></li>
									<li class="text">Guardian Relation  :  </li>
									<li class="agileits-main"><input name="lgrelation" value="<?php echo $post->lgrelation ?>" type="text" required ></li>
									<li class="text">Guardian Occupation  :  </li>
									<li class="agileits-main"><input name="lgoccupation" value="<?php echo $post->lgoccupation; ?>" type="text" required ></li>
									<li class="text">Guardian Phonenumber:  </li>
									<li class="agileits-main"><input name="lgphone" value="<?php echo $post->lgphone; ?>" type="text" required></li>
								</ul>
							</div>
							<div class="text-center">
								<input type="submit" name="submit" value="Update Details" class="btn btn-success">

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
