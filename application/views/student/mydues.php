<?php $this->load->view('student/header');
error_reporting(0); ?>


<body>
	<!-- banner -->
	<div class="banner text-center">
		<div class="header agileinfo-header">
			<!-- header -->
			<?php $this->load->view('student/navbar'); ?>
		</div><!-- //header -->

		<body>
			<div>
				<table style="background-color: white;" class="table display table-dark table-bordered">
					<tr>
						<td>Department</td>
						<td>Amount</td>
					</tr>
					<?php foreach ($dues as $due) { ?>
						<tr>
							<td><?= $due->department ?></td>
							<td><?= $due->amount ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<?php $this->load->view('student/footer'); ?>