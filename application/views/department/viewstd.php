<?php $this->load->view('department/header'); ?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard'); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Student</a></li>
      <li class="breadcrumb-item active" aria-current="page">View Student</li>

    </ol>

  </nav>

  <?php if($this->session->flashdata('errormsg')) { ?>
       <div class="alert alert-dismissible alert-danger">
         <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
         <strong>Sorry!</strong> <?php echo $this->session->flashdata('errormsg'); ?>
         </div>

  <?php }else{if($this->session->flashdata('success')){ ?>
    <div class="alert alert-dismissible alert-success">
         <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
         <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php } }?>

  <div class="table-responsive">
    <table id="staff" class="table display table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>sl/no</th>
        <th>NAME</th>
        <th>Admission No</th>
        <th>Branch</th>
        <th>Semester</th>
        <th>University Register No</th>
        <th>Credits</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $row_count = 1;
      if (count($posts)):
        foreach ($posts as $post):
       ?>
      <tr>
        <th><?php echo $row_count; ?></th>
        <td><?php echo $post->std_name; ?></td>
        <td><?php echo $post->admission_no; ?></td>
        <td><?php echo $post->branch; ?> </td>
        <td><?php echo $post->semester; ?> </td>
        <td><?php echo $post->universityregno; ?> </td>
        <td>
          <?php echo $post->std_credits; ?>

        </td>
        <!-- <td><a href="<?php echo base_url("staff/updatestudent/{$post->std_id}"); ?>"><i class="fa fa-pen text-info"></i> </a></td> -->
        <!-- <td><a href="<?php echo base_url("staff/deletestudent/{$post->std_id}"); ?>" onclick="return confirm('Are you Sure ? ' )" title="DELETE" ><i class="fa fa-trash text-danger"></i> </a></td> -->
      </tr>
      </tr>
    <?php endforeach;
      endif;
     ?>
    </tbody>
  </table>
</div>

<?php $this->load->view('department/footer'); ?>
