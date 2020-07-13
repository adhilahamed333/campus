<?php $this->load->view('dashboard/header'); ?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard'); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Course</a></li>
      <li class="breadcrumb-item active" aria-current="page">View Course</li>

    </ol>
    <div class="text-right mb-3">
      <a href="<?php echo base_url('dashboard/addcourse'); ?>">
        <button type="button" class="btn btn-primary">Add Course</button>
      </a>

    </div>

  </nav>

    <?php if($this->session->flashdata('errormsg')) { ?>
         <div class="alert alert-dismissible alert-danger" id="erroralert">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Sorry!</strong> <?php echo $this->session->flashdata('errormsg'); ?>
        </div>

    <?php }else{if($this->session->flashdata('success')){ ?>
      <div class="alert alert-dismissible alert-success" id="erroralert">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php } }?>
  <div class="table-responsive">
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
        <th>Edit</th>
        <th>Delete</th>
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
        <td><?php echo $post->semester; ?></td>
        <td><?php echo $post->branch; ?> </td>
        <td><?php echo $post->code; ?></td>
        <td><?php echo $post->course_name; ?></td>
        <td><?php echo $post->slot; ?> </td>
        <td><?php echo $post->credits; ?></td>
        <td><a href="<?php echo base_url("dashboard/updatecourse/{$post->course_id}"); ?>"><i class="fa fa-pen text-info"></i> </a></td>
        <td><a href="<?php echo base_url("dashboard/deletecourse/{$post->course_id}"); ?>" onclick="return confirm('Are you Sure ? ' )" title="DELETE" ><i class="fa fa-trash text-danger"></i> </a></td>
      </tr>
    <?php
    $row_count++;
  endforeach;
      endif;
     ?>
    </tbody>
  </table>
</div>

<?php $this->load->view('dashboard/footer'); ?>
