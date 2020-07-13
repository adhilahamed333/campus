
<?php $this->load->view('staff/header'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">WELCOME <?php echo $this->session->userdata('name');?></h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->


            <!-- Earnings (Monthly) Card Example -->


            <!-- Earnings (Monthly) Card Example -->


            <!-- Pending Requests Card Example -->

          </div>

          <!-- Content Row -->

          <div class="row">
<form method="post" action="advisor_action">
            <!-- Area Chart -->
			<table border='1' >
			<th style="padding:10px;">Name</th>
			<th style="padding:10px;">HOD Status</th>
			<th style="padding:10px;">Due Amount</th>
			<th style="padding:10px;">Due Type</th>
			<th style="padding:10px;">Action</th>
			
					<?php foreach($posts as $post): ?>
<tr>
<input type="hidden" name="id" value="<?php echo $post->sem_reg_id; ?>">
<td style="padding:10px;"><?php echo $post->student_name; ?></td>
<td style="padding:10px;"><?php echo $post->hod_status; ?></td>
<td style="padding:10px;"><?php echo $post->due_amount; ?></td>
<td style="padding:10px;"><?php echo $post->type; ?></td>
<td style="padding:10px;"><input type="submit" name="" class="btn btn-outline-success pl-4 pr-4" value="Aprove" ></td>

</tr>

 


            <!-- Pie Chart -->
					<?php endforeach;?>
</table>
         
</form>
		 </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('staff/footer'); ?>
