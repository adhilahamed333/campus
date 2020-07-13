<?php $this->load->view('dashboard/header'); ?>

<div class="container">
    <h1  class="display-5 text-danger">Gallery</h1>
    <form>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
        <small class="form-text text-muted">Image less than 500MB</small>
      </div>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter The Image ">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php $this->load->view('dashboard/footer'); ?>
