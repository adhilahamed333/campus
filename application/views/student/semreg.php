<?php $this->load->view('student/header') ?>

<body>
  <!-- banner -->
  <div class="banner-1">
    <div class="header agileinfo-header">
      <!-- header -->
      <?php $this->load->view('student/navbar') ?>
    </div><!-- //header -->

  </div>
  <div class="about-bottom">

    <div class="col-md-12 w3l_about_bottom_right one">
      <div class="abt-w3l">
        <div class="header-w3l">
          <h2>Personal Details</h2><br><br>

          <div class="">
            <a href="<?php echo base_url('Student/personalprofile'); ?>">
              <button type="button" class="btn btn-info">Back</button>
            </a>
          </div><br><br>


          <?php if (count($posts) && $status->c == 0) : ?>
            <?php foreach ($posts as $post) : ?>
              <?php echo form_open("Student/semreg_action/{$post->std2_id}", array('class' => 'mod2')); ?>
              <div class="col-md-4 col-xs-4 w3l-left-mk">
                <ul>
                  <input type="hidden" name="std_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                  <li class="text">Phone Number : </li>
                  <li class="agileits-main"><input type="text" name="phone" value="<?php echo $post->phone; ?>" required></li>
                  <li class="text">Address : </li>
                  <li class="agileits-main"></i><input class="date" name="address" type="text" value="<?php echo $post->address; ?>" required></li>
                  <li class="text">Email : </li>
                  <li class="agileits-main"></i><input type="email" name="email" value="<?php echo $post->email; ?>" required></li>
                  <li class="text">Category : </li>
                  <li class="agileits-main"><input type="text" name="category" value="<?php echo $post->category; ?>" required></li>


                </ul>
              </div>
              <div class="col-md-4 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">Name Of Father / Mother : </li>
                  <li class="agileits-main"><input name="fath_moth" value="<?php echo $post->fath_moth; ?>" type="text" required></li>
                  <li class="text">Occupation Of Father / Mother : </li>
                  <li class="agileits-main"><input name="occupationfath_moth" value="<?php echo $post->occupationfath_moth; ?>" type="text" required></li>
                  <li class="text">Phonenumber Of Father / Mother : </li>
                  <li class="agileits-main"><input name="phnofath_moth" value="<?php echo $post->phnofath_moth; ?>" type="text" required></li>
                  <li class="text">Email Of Father / Mother : </li>
                  <li class="agileits-main"><input name="emailfath_moth" value="<?php echo $post->emailfath_moth; ?>" type="text" required></li>
                </ul>
              </div>
              <div class="col-md-4 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">Name Of Guardian : </li>
                  <li class="agileits-main"><input name="lgname" value="<?php echo $post->lgname; ?>" type="text" required></li>
                  <li class="text">Guardian Relation : </li>
                  <li class="agileits-main"><input name="lgrelation" value="<?php echo $post->lgrelation ?>" type="text" required></li>
                  <li class="text">Guardian Occupation : </li>
                  <li class="agileits-main"><input name="lgoccupation" value="<?php echo $post->lgoccupation; ?>" type="text" required></li>
                  <li class="text">Guardian Phonenumber: </li>
                  <li class="agileits-main"><input name="lgphone" value="<?php echo $post->lgphone; ?>" type="text" required></li>
                </ul>
              </div>


              <h2>Credit Details</h2><br><br>

              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem1 : </li>
                  <li class="agileits-main"><input name="sem1" value="" type="text"></li>
                </ul>
              </div>

              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem2 : </li>
                  <li class="agileits-main"><input name="sem2" value="" type="text"></li>
                </ul>
              </div>

              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem3 : </li>
                  <li class="agileits-main"><input name="sem3" value="" type="text"></li>
                </ul>
              </div>

              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem4 : </li>
                  <li class="agileits-main"><input name="sem4" value="" type="text"></li>
                </ul>
              </div>

              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem5 : </li>
                  <li class="agileits-main"><input name="sem5" value="" type="text"></li>
                </ul>
              </div>

              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem6 : </li>
                  <li class="agileits-main"><input name="sem6" value="" type="text"></li>
                </ul>
              </div>
              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem7 : </li>
                  <li class="agileits-main"><input name="sem7" value="" type="text"></li>
                </ul>
              </div>

              <div class="col-md-3 col-xs-4 w3l-right-mk">
                <ul>
                  <li class="text">sem8 : </li>
                  <li class="agileits-main"><input name="sem8" value="" type="text"></li>
                </ul>
              </div>
              <div>
                <ul>
                  <li class="text">CGPA : </li>
                  <li class="agileits-main"><input name="cgpa" value="" type="text"></li>
                </ul>
              </div>
              <h2> Select Your Subjects </h2><br><br>

              <?php
              $sem = "";
              $semester = $stddet->semester;

              if ($semester == 'S1') {
                $sem = 'S2';
              } else if ($semester == 'S2') {

                $sem = 'S3';
              }
 else if ($semester == 'S0') {

                $sem = 'S1';
              } else if ($semester == 'S3') {
                $sem = 'S4';
              } else if ($semester == 'S4') {
                $sem = 'S5';
              } else if ($semester == 'S5') {
                $sem = 'S6';
              } else if ($semester == 'S6') {
                $sem = 'S7';
              } else if ($semester == 'S7') {
                $sem = 'S8';
              }

              $branch = $stddet->branch;
              $query = $this->db->query("select * from course where semester='$sem' and branch='$branch'");

              $res = $query->result();
              foreach ($res as $val) {
              ?>

                <div class="col-md-3 col-xs-4 w3l-right-mk">
                  <ul>

                    <input type="checkbox" name="sub[]" value="<?php echo $val->course_id ?>"> <?= $val->course_name ?>
                  </ul>
                </div>
              <?php

              }

              ?>
              <input type="hidden" name="sem" value="<?php echo $sem ?>">
              <input type="hidden" name="staff" value="<?php echo $stddet->staff_id ?>">
              <input type="hidden" name="branch" value="<?php echo $stddet->branch ?>">

              <div class="text-center">
                <input type="submit" name="submit" value="Update Details" class="btn btn-success">

              </div>
              <div class="clearfix"></div>
              <?php echo form_close(); ?>
            <?php endforeach; ?>

          <?php endif;
          if ($status->c > 0) { ?>
            <div class="container">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Course</th>
                    <th>Semester</th>
                    <?php if ($status->hod_status == "1") { ?>
                      <th>Download</th>
                    <?php }else{ echo"<th>Status</th>";} ?>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $std->Course; ?></td>
                    <?php if ($std->semester == "S1") : ?>
                      <th>Second Semester</th>
                    <?php endif; ?>
                    <?php if ($std->semester == "S2") : ?>
                      <th>Third Semester</th>
                    <?php endif; ?>
                    <?php if ($std->semester == "S3") : ?>
                      <th>Forth Semester</th>
                    <?php endif; ?>
                    <?php if ($std->semester == "S4") : ?>
                      <th>Fifth Semester</th>
                    <?php endif; ?>
                    <?php if ($std->semester == "S5") : ?>
                      <th>Sixth Semester</th>
                    <?php endif; ?>
                    <?php if ($std->semester == "S6") : ?>
                      <th>Seventh Semester</th>
                    <?php endif; ?>
                    <?php if ($std->semester == "S7") : ?>
                      <th>Eight Semester</th>
                    <?php endif; ?>
                    <?php if ($std->semester == "S8") : ?>
                      <th>End</th>
                    <?php endif; ?>
                    <?php if ($status->hod_status == "1") { ?>
                      <td><a href="<?php echo base_url() . "pdf_generate/print_req/" . $status->std_id; ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                    <?php } else {
                      echo " <td>Pending</td>";
                    } ?>
                  </tr>
                </tbody>
              </table>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <!-- contact -->
  <!-- //contact -->
  <!-- footer start here -->
  <?php $this->load->view('student/footer') ?>