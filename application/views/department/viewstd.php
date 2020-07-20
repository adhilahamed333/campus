<?php $this->load->view('department/header');
error_reporting(0);
//var_dump($dues[2]->amount);
?>
<div class="container-fluid">

  <div class="table-responsive">
    <table id="staff" class="table display table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Branch</th>
          <th>Semester</th>

        </tr>
      </thead>
      <tbody>
        <form action="viewstudents" method="post">
          <tr>
            <td>
              <select name="branch">
                <?php
                $row_count = 1;
                if (count($posts_branch)) :
                  foreach ($posts_branch as $pp) :
                ?>
                    <option value="<?php echo $pp->branch; ?>"><?php echo $pp->branch; ?></option>
                <?php endforeach;
                endif;
                ?>
              </select>
            </td>
            <td>

              <select name="semester">
                <?php
                $row_count = 1;
                if (count($posts_semester)) :
                  foreach ($posts_semester as $ppp) :
                ?>
                    <option value="<?php echo $ppp->semester; ?>"><?php echo $ppp->semester; ?></option>
                <?php endforeach;
                endif;
                ?>
              </select>

            </td>
            <td> <input type="submit" name="search" value="Search"></td>


          </tr>
        </form>
      </tbody>
    </table>
  </div>





  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard'); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Student</a></li>
      <li class="breadcrumb-item active" aria-current="page">View Student</li>

    </ol>

  </nav>

  <?php if ($this->session->flashdata('errormsg')) { ?>
    <div class="alert alert-dismissible alert-danger">
      <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
      <strong>Sorry!</strong> <?php echo $this->session->flashdata('errormsg'); ?>
    </div>

    <?php } else {
    if ($this->session->flashdata('success')) { ?>
      <div class="alert alert-dismissible alert-success">
        <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
      </div>
  <?php }
  } ?>

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
          <th>Due </th>
          <th>Due Amount</th>
          <th>Save</th>

        </tr>
      </thead>

      <tbody>
        <?php
        $row_count = 1;
        if (count($posts)) :
          foreach ($posts as $post) :


        ?>
            <form method="post" action="save_due">

              <input type="hidden" name="std_id" value="<?php echo $post->std_id; ?>">
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
                <td>
                  <select name="due_type">

                    <option value="<?php echo $_SESSION['dept_id']; ?>"><?php echo $_SESSION['department']; ?></option>

                  </select>
                </td>
                <td>
                  <input type="text" name="amount" value="<?php echo $dues[$post->std_id]->amount; ?>">

                </td>
                <td>
                  <input type="submit" name="save" value="save">

                </td>
                <!-- <td><a href="<?php echo base_url("staff/updatestudent/{$post->std_id}"); ?>"><i class="fa fa-pen text-info"></i> </a></td> -->
                <!-- <td><a href="<?php echo base_url("staff/deletestudent/{$post->std_id}"); ?>" onclick="return confirm('Are you Sure ? ' )" title="DELETE" ><i class="fa fa-trash text-danger"></i> </a></td> -->
              </tr>
              </tr>
            </form>
        <?php $row_count += 1;
          endforeach;
        endif;
        ?>
      </tbody>

    </table>
  </div>

  <?php $this->load->view('department/footer'); ?>