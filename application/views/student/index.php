<?php $this->load->view('student/header');
error_reporting(0); ?>
<style media="screen">
	.bounce {
		height: 40px;
		overflow: hidden;
		position: relative;
		background: #fefefe;
		color: #333;
		border: 1px solid #4a4a4a;
	}

	marquee {
		margin-top: 10px;
	}
</style>

<body>
	<!-- banner -->
	<div class="banner">
		<div class="header agileinfo-header">
			<!-- header -->
			<?php $this->load->view('student/navbar'); ?>
		</div><!-- //header -->

		<?php

		$creditscheck1 = $credits->first_sem + $credits->sec_sem;
		$creditscheck2 = $credits->first_sem + $credits->sec_sem + $credits->third_sem + $credits->forth_sem + 123;
		$semester = $stddet->semester;
		$sem_date = $sem_date;
		$sem_date = 'exists';
		if ($sem_date == 'exists') {
		?>

			<div class="bounce text-center">
				<?php if ($due != null) { ?>
					<a style="margin-top:2px;margin-left:2px;" href="<?php echo base_url("student/myDues"); ?>" class="text-danger btn btn-success">
						View Dues
					</a>
				<?php } ?>
				<?php if ($semester == "Forth Semester") : ?>
					<?php if ($creditscheck1 >= 26) : ?>
						<!--<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">-->
						<a style="margin-top:2px;margin-left:2px;" href="<?php echo base_url("student/semregistration"); ?>" class="text-danger btn btn-success">
							Fifth Semester Registration Opens
						</a>
						(You Are Only Eligible when you have the Required Credits)
						<!--</marquee>-->
					<?php else : ?>
						<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
							<p class="text-danger">(You Are Not Eligible For Fifth Semester Registration)</p>
						</marquee>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ($semester == "Sixth Semester") : ?>
					<?php if ($creditscheck2 >= 52) : ?>

						<a style="margin-top:2px;margin-left:2px;" href="<?php echo base_url("student/semregistration"); ?>" class="text-danger btn btn-success">
							Seventh Semester Registration Opens
							<!-- <?php echo $creditscheck1 . " " . $semester; ?> -->
						</a>
						(You Are Only Eligible when you have the Required Credits)

					<?php else : ?>
						<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
							(You Are Not Eligible For Seventh Semester Registration)
						</marquee>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ($semester == "First Semester" || $semester == "Second Semester" || $semester == "Third Semester" || $semester == "Fifth Semester" || $semester == "Seventh Semester") : ?>
					<a style="margin-top:2px;margin-left:2px;" href="<?php echo base_url("student/semregistration"); ?>" class="text-danger btn btn-success">
						Semester Registration
						<!-- <?php echo $creditscheck1 . " " . $semester; ?> -->
					</a>
					(You Are Only Eligible when you have the Required Credits)
				<?php endif; ?>

				<?php if ($semester == "Eighth Semester") : ?>
					<a style="margin-top:2px;margin-left:2px;" href="<?php echo base_url("student/semregistration"); ?>" class="text-danger btn btn-success">
						Good Luck
						<!-- <?php echo $creditscheck1 . " " . $semester; ?> -->
					</a>
				<?php endif; ?>

			</div>

		<?php
		}
		?>
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

	<?php $this->load->view('student/footer'); ?>