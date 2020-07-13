<?php $this->load->view('student/header') ?>

<body>
	<!-- banner -->
	<div class="banner-1">
		<div class="header agileinfo-header">
			<!-- header -->
			<?php $this->load->view('student/navbar') ?>
		</div><!-- //header -->

	</div>
	<div class="about-bottom">

		<div class="col-md-12 w3l_about_bottom_right one">
			<div class="abt-w3l">
				<div class="header-w3l">
					<h2>Semester Registration</h2><br><br>

					<?php if ($this->session->flashdata('msgfail')) { ?>
						<div class="alert alert-dismissible alert-danger">
							<button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
							<strong>Sorry!</strong> <?php echo $this->session->flashdata('msgfail'); ?>
						</div>

						<?php } else {
						if ($this->session->flashdata('msgsuccess')) { ?>
							<div class="alert alert-dismissible alert-success">
								<button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
								<strong>Success!</strong> <?php echo $this->session->flashdata('msgsuccess'); ?>
							</div>
					<?php }
					} ?>
					<br>

					<?php if ($regdetails < 0) : ?>
						<?php foreach ($std as $std) : ?>
							<div class="container">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Course</th>
											<th>Semester</th>
											<th>Status</th>
											<th>Download</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $std->Course; ?></td>
											<?php if ($std->semester == "First Semester") : ?>
												<th>Second Semester</th>
											<?php endif; ?>
											<?php if ($std->semester == "Second Semester") : ?>
												<th>Third Semester</th>
											<?php endif; ?>
											<?php if ($std->semester == "Third Semester") : ?>
												<th>Forth Semester</th>
											<?php endif; ?>
											<?php if ($std->semester == "Forth Semester") : ?>
												<th>Fifth Semester</th>
											<?php endif; ?>
											<?php if ($std->semester == "Fifth Semester") : ?>
												<th>Sixth Semester</th>
											<?php endif; ?>
											<?php if ($std->semester == "Sixth Semester") : ?>
												<th>Seventh Semester</th>
											<?php endif; ?>
											<?php if ($std->semester == "Seventh Semester") : ?>
												<th>Eight Semester</th>
											<?php endif; ?>
											<?php if ($std->semester == "Eighth Semester") : ?>
												<th>End</th>
											<?php endif; ?>
											<td>Pending</td>
											<td><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php endforeach; ?>
					<?php else : ?>
						<?php foreach ($perdetails as $perdetails) : ?>
							<?php foreach ($std as $std) : ?>
								<div class="col-md-4 col-xs-4 w3l-left-mk">
									<ul>
										<li class="text">Course : </li>
										<li class="agileits-main"><input type="text" value="<?php echo $std->Course; ?>" readonly></li>
									</ul>
								</div>
								<div class="col-md-4 col-xs-4 w3l-right-mk">
									<ul>
										<li class="text">Branch : </li>
										<li class="agileits-main"><input value="<?php echo $std->branch; ?>" type="text" readonly></li>
									</ul>
								</div>
								<div class="col-md-4 col-xs-4 w3l-right-mk">
									<ul>
										<li class="text">Current Semester : </li>
										<li class="agileits-main"><input value="<?php echo $std->semester; ?>" type="text" readonly></li>
									</ul>
								</div>
								<div class="col-md-12 col-xs-12">
									<div class="col-md-4 col-xs-4">
										<li class="text">Admission Number : </li>
										<li class="agileits-main"><input value="<?php echo $std->admission_no; ?>" type="text" readonly></li>
									</div>
									<div class="col-md-4 col-xs-4">
										<li class="text">Date Of Joining : </li>
										<li class="agileits-main"><input value="<?php echo $std->dateofjoining; ?>" type="text" readonly></li>
									</div>
									<div class="col-md-4 col-xs-4">
										<li class="text">Next Semester : </li>
										<?php if ($std->semester == "S1") : $semester = "S2"; ?>
											<li class="agileits-main"><input value="S2" type="text" readonly></li>
										<?php endif; ?>
										<?php if ($std->semester == "S2") : $semester = "S3"; ?>
											<li class="agileits-main"><input value="S3" type="text" readonly></li>
										<?php endif; ?>
										<?php if ($std->semester == "S3") : $semester = "S4"; ?>
											<li class="agileits-main"><input value="S4" type="text" readonly></li>
										<?php endif; ?>
										<?php if ($std->semester == "S4") : $semester = "S5"; ?>
											<li class="agileits-main"><input value="S5" type="text" readonly></li>
										<?php endif; ?>
										<?php if ($std->semester == "S5") : $semester = "S6"; ?>
											<li class="agileits-main"><input value="S6" type="text" readonly></li>
										<?php endif; ?>
										<?php if ($std->semester == "S6") : $semester = "S7"; ?>
											<li class="agileits-main"><input value="S7" type="text" readonly></li>
										<?php endif; ?>
										<?php if ($std->semester == "S7") : $semester = "S8"; ?>
											<li class="agileits-main"><input value="S8" type="text" readonly></li>
										<?php endif; ?>
										<?php if ($std->semester == "S8") : $semester = ""; ?>
											<li class="agileits-main"><input value="" type="text" readonly></li>
										<?php endif; ?>

									</div>

								</div>
								<div class="">
									<ul>
										<div class="col-md-12 col-xs-12">
											<li class="text">Name : </li>
											<li class="agileits-main"><input value="<?php echo $std->std_name; ?>" type="text" readonly></li>
										</div>
										<div class="col-md-12 col-xs-12">
											<li class="text">University Register Number : </li>
											<li class="agileits-main"><input value="<?php echo $std->universityregno; ?>" type="text" readonly></li>
										</div>
										<div class="col-md-12 col-xs-12">
											<li class="text">Address : </li>
											<li class="agileits-main"><input value="<?php echo $perdetails->address; ?>" type="text" readonly></li>
										</div>
										<div class="col-md-12 col-xs-12">
											<div class="col-md-6 col-xs-6">
												<li class="text">Phone Number : </li>
												<li class="agileits-main"><input value="<?php echo $perdetails->phone; ?>" type="text" readonly></li>
											</div>
											<div class="col-md-6 col-xs-6">
												<li class="text">Email : </li>
												<li class="agileits-main"><input value="<?php echo $perdetails->email; ?>" type="text" readonly></li>
											</div>

										</div>
									</ul>
								</div>
								<div class="clearfix"></div>
							<?php endforeach; ?>
						<?php endforeach; ?>

						<div class="text-right container">
							<a href="<?php echo base_url("student/semregistration2/") . $semester ; ?>">
								<button type="button" class="btn btn-success">Next</button>
							</a>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- contact -->
	<!-- //contact -->
	<!-- footer start here -->
	<?php $this->load->view('student/footer') ?>