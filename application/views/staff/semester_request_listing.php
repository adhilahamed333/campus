<?php $this->load->view('staff/header');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">WELCOME <?php echo $this->session->userdata('name'); ?></h1>
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
    <?php
    if ($posts != null) {
    ?>

      <form method="post" action="advisor_action">
        <!-- Area Chart -->
        <table border='1'>
          <th style="padding:10px;">Name</th>
          <th style="padding:10px;">HOD Status</th>
          <th style="padding:10px;">Semster</th>
          <th style="padding:10px;">Course</th>
          <th style="padding:10px;">Action</th>
          <th style="padding:10px;">View Details</th>

          <?php


          foreach ($posts as $post) {
          ?>
            <tr>
              <input type="hidden" name="id" value="<?php echo $post->sem_reg_id; ?>">
              <td style="padding:10px;"><?php echo $post->std_name; ?></td>
              <td style="padding:10px;"><?php echo $post->semester; ?></td>
              <td style="padding:10px;"><?php echo $post->Course; ?></td>
              <td style="padding:10px;"><?php echo $post->branch; ?></td>
              <td><a href="<?php echo base_url() ?>Staff/sem_action/<?= $post->sem_reg_id ?>"> Approve</a></td>
              <td><a href="<?php echo base_url("staff/personalprofile/") . $post->admission_no; ?>">Personal details</a><br><a href="<?php echo base_url("staff/acdprofile/") . $post->std_id; ?>">Academic details</a></td>

            </tr>




            <!-- Pie Chart -->
          <?php }
          ?>
        </table>

      </form>
  </div>


  <!-- Content Row -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
    }
?>
<?php $this->load->view('staff/footer'); ?>