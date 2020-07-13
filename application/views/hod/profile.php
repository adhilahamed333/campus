
<?php $this->load->view('hod/header'); ?>
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('staff'); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
      </ol>
    </nav>

    <?php if($this->session->flashdata('msgfail')) { ?>
         <div class="alert alert-dismissible alert-danger">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Sorry!</strong> <?php echo $this->session->flashdata('msgfail'); ?>
           </div>

    <?php }else{if($this->session->flashdata('msgsuccess')){ ?>
      <div class="alert alert-dismissible alert-success">
           <button data-dismiss="alert" class="close close-sm" type="button"> <i class="fa fa-times"></i> </button>
           <strong>Success!</strong> <?php echo $this->session->flashdata('msgsuccess'); ?>
      </div>
      <?php } }?>
        <?php foreach($posts as $post): ?>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Department</label>
                <input type="text" class="form-control" name="admission_no" value="<?php echo $post->department; ?>" placeholder="Admission No" readonly>
              </div>
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" name="admission_no" value="<?php echo $post->hod_name; ?>" placeholder="Admission No" readonly>
              </div>

            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">User_Id</label>
                <input type="text" class="form-control" value="<?php echo $post->user_id; ?>" placeholder="email / username" readonly >
              </div>
              <div class="form-group col-md-6">
                <label for="">Password</label>
                <input type="text" class="form-control" value="<?php echo $post->password; ?>" readonly >
              </div>
            </div>
          <!-- </form> -->

        <?php endforeach;?>

  </div>
<?php $this->load->view('hod/footer'); ?>
