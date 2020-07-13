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
					<h2>Semester Registration</h2>
					<p class="text-center" style="font-size:25px; color:red">Course Selection</p>

					<div class="text-left">
						<a href="<?php echo base_url("student/semregistration"); ?>">
							<button type="button" class="btn btn-info">Back</button>
						</a>
					</div>
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

					<form class="" action="courseregistration" method="post">
						<table id="staff" class="table display table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>sl/no</th>
									<th>Semester</th>
									<th>Branch</th>
									<th>Code</th>
									<th>Course Name</th>
									<th>Slot</th>
									<th>Credits</th>
									<th>Select</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$row_count = 1;
								foreach ($course as $course) :
									if ($course->semester == $semester) :
								?>
										<tr>
											<th><?php echo $row_count; ?></th>
											<td><?php echo $course->semester; ?></td>
											<td><?php echo $course->branch; ?></td>
											<td><?php echo $course->code; ?></td>
											<td><?php echo $course->course_name; ?></td>
											<td><?php echo $course->slot; ?> </td>
											<td><?php echo $course->credits; ?></td>
											<td>
												<input type="checkbox" name="course[]" value="<?php echo $course->course_id; ?>">

											</td>

										</tr>
								<?php
										$row_count++;
									endif;
								endforeach;
								?>
							</tbody>

						</table><br><br>
						<div class="col-md-3">
							<select name="advisor" class="form-control">
								<option value=""> Select Advisor</option>


								<?php
								foreach ($advisor as $advisor) :

								?>
									<option value="<?php echo $advisor->s_id; ?>"> <?php echo $advisor->name; ?></option>


								<?php
								endforeach;
								?>
							</select>
						</div>



						<br><br>
						<div class="text-right">
							<input type="submit" name="submit" value="NEXT" class="btn btn-success">
						</div>
					</form>










					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>




	<!-- contact -->
	<!-- //contact -->
	<!-- footer start here -->
	<?php $this->load->view('student/footer') ?>