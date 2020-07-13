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
				<div class="text-center mb-4">
					<a href="<?php echo base_url('Student/personalprofileedit'); ?>">
						<button type="button" class="btn btn-info">Edit</button>
					</a>
				</div><br>
				<?php if($this->session->flashdata('msgfail')) { ?>
		         <div class="alert alert-dismissible alert-danger">
		           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
		           <strong>Sorry!</strong> <?php echo $this->session->flashdata('msgfail'); ?>
		           </div>

		    <?php }else{if($this->session->flashdata('msgsuccess')){ ?>
		      <div class="alert alert-dismissible alert-success">
		           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
		           <strong>Success!</strong> <?php echo $this->session->flashdata('msgsuccess'); ?>
		      </div>
		      <?php } }?>
				<br>


				<?php if(count($posts)):?>
					<?php foreach($posts as $post): ?>
							<div class="col-md-4 col-xs-4 w3l-left-mk">
								<ul>
									<li class="text">Phone Number :  </li>
									<li class="agileits-main"><input type="text"  value="<?php echo $post->phone; ?>" readonly></li>
									<li class="text">Address :  </li>
									<li class="agileits-main"></i><input class="date"  type="text"  value="<?php echo $post->address; ?> " readonly></li>
									<li class="text">Email :  </li>
									<li class="agileits-main"></i><input  type="email" name="email" value="<?php echo $post->email; ?>" readonly ></li>
									<li class="text">Category :  </li>
									<li class="agileits-main"><input type="text" value="<?php echo $post->category; ?>" readonly ></li>
								</ul>
							</div>
							<div class="col-md-4 col-xs-4 w3l-right-mk">
								<ul>
									<li class="text">Name Of Father / Mother  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->fath_moth; ?>" type="text" readonly></li>
									<li class="text">Occupation Of Father / Mother  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->occupationfath_moth; ?>" type="text"  readonly></li>
									<li class="text">Phonenumber Of Father / Mother :  </li>
									<li class="agileits-main"><input value="<?php echo $post->phnofath_moth; ?>" type="text"  readonly></li>
									<li class="text">Email Of Father / Mother :  </li>
									<li class="agileits-main"><input value="<?php echo $post->emailfath_moth; ?>" type="text"  readonly></li>
								</ul>
							</div>
							<div class="col-md-4 col-xs-4 w3l-right-mk">
								<ul>
									<li class="text">Name Of Guardian  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->lgname; ?>" type="text" readonly></li>
									<li class="text">Guardian Relation  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->lgrelation ?>" type="text"  readonly></li>
									<li class="text">Guardian Occupation  :  </li>
									<li class="agileits-main"><input value="<?php echo $post->lgoccupation; ?>" type="text"  readonly></li>
									<li class="text">Guardian Phonenumber:  </li>
									<li class="agileits-main"><input value="<?php echo $post->lgphone; ?>" type="text"  readonly></li>
								</ul>
							</div>
							<div class="clearfix"></div>
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
