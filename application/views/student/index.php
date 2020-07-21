<?php $this->load->view('student/header'); 
error_reporting(0);?>
<style media="screen">
.bounce {
					height: 40px;
					overflow: hidden;
					position: relative;
					background: #fefefe;
					color: #333;
					border: 1px solid #4a4a4a;
			}
marquee{
	margin-top: 10px;
}

</style>
<body>
<!-- banner -->
	<div class="banner">
		<div class="header agileinfo-header"><!-- header -->
			<?php $this->load->view('student/navbar'); ?>
		</div><!-- //header -->

		<?php

			$creditscheck1 = $credits->first_sem + $credits->sec_sem;
			$creditscheck2 = $credits->first_sem + $credits->sec_sem + $credits->third_sem + $credits->forth_sem+123;
			  $semester = $stddet->semester;
			
           	if($sem_date=='exists')
			{
				$id=$stddet->std_id;
				$query=$this->db->query("select * from due_amount where student_id=$id and amount>0");
			      if ($query->num_rows()>0){


			      		
			        	 ?>
					<div class="row" style="color: red;text-align: center;margin-top: 2%">
									<marquee><h3> Sem registration(Dues pending)</h3></marquee>
								</div>
					<?php
			       
			      }
			      else
			      {
			      	?>
			      	<div class="row" style="color: red;text-align: center;margin-top: 2%">
									<markquee><h3> Sem registration<a href="<?php echo base_url('student/semreg')?>"> CLick here</a></h3></markquee>
								</div>
			      	<?php
			      }
	
		 	?>





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