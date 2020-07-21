<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Student_model extends CI_Model
{

  /**
   * @author Unnikrishnan
   **/
  public function addstd($data)
  {
    return $this->db->insert('stdreg', $data);
  }

  public function stdpersonal($admission)
  {
    return $this->db->insert('stdpersonal', $admission);
  }

  public function valid($user_email, $password)
  {
    $this->db->select('*');
    $this->db->from('stdreg');
    $this->db->where('admission_no', $user_email);
    $this->db->where('password', $password);
    // $this -> db -> limit(1);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function getstd($std_id)
  {
    $this->db->select('*');
    $this->db->from('stdreg');

    $this->db->where('std_id', $std_id);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function getstdstatus($std_id)
  {
    $this->db->select('COUNT(*) as c');
    $this->db->select('hod_status');
    $this->db->select('sem_reg_id');
    $this->db->select('std_id');
    $this->db->from('sem_reg');
    $this->db->where('std_id', $std_id);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row();
    }
  }


  public function getsem_not($std_id)
  {

    $query = $this->db->query("select * from stdreg,sem_display_date where stdreg.std_id=$std_id and stdreg.staff_id=sem_display_date.staff_id and sem_display_date.date<now() and sem_display_date.end_date>now()");
    if ($query->num_rows() > 0) {
      $sem_date = 'exists';
      return $sem_date;
    }
  }


  public function update_std($data, $id)
  {
    return $this->db->where('std2_id', $id)->update('stdpersonal', $data);
  }
  public function sem_regaction($data, $data1, $data3, $id, $data4, $std_id, $data5)
  {
    $this->db->where('std_id', $std_id)->update('stdreg', $data5);
    $this->db->where('std2_id', $id)->update('stdpersonal', $data);
    $res = $this->db->query("select * from credits where std_id=$std_id");
    if ($res->num_rows() > 0) {
      $this->db->delete('credits', array('std_id' => $std_id));
    }

    $this->db->insert("credits", $data1);
    $this->db->insert("sem_reg", $data3);
    $this->db->insert("semsubjects", $data4);
  }


  public function getstdpersonal($user_adno)
  {
    $this->db->select('*');
    $this->db->from('stdpersonal');
    $this->db->where('admission_no', $user_adno);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }


  public function getstdperbyid($std_id)
  {
    $this->db->select('*');
    $this->db->from('stdpersonal');
    $this->db->where('std_id', $std_id);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function sem_reg($std_id, $course_id, $advisor)
  {
    $query = "INSERT INTO sem_reg (std_id,course_id,advisor_id) values($std_id,$course_id,$advisor)";
    return $this->db->query($query);
  }

  public function getregdetails($std_id)
  {
    $this->db->select('*');
    $this->db->from('sem_reg');
    $this->db->where('std_id', $std_id);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }


  public function advisor()
  {
    $this->db->select('*');
    $this->db->from('staff');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function getdue($id)
  {
    $this->db->select('due_amount.amount,due_type.type');
    $this->db->from('due_amount');
    $this->db->join('stdreg', 'due_amount.student_id = stdreg.std_id', 'inner');
    $this->db->join('due_type', 'due_type.id = due_amount.due_id', 'inner');
    $this->db->where('stdreg.std_id', $id);

    $query = $this->db->get();
    return $query->result();
  }
  public function getdues($id)
  {
    // echo $id;
    $query = $this->db->query("select * from due_amount where student_id=$id");

    return $query;
  }



  public function regcourse($std_id)
  {
    $this->db->select('*');
    $this->db->from('sem_reg');
    $this->db->join('semsubjects', 'semsubjects.sem = sem_reg.course_id');

    $this->db->where('std_id', $std_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row();
    }
  }
  public function courseDetails($c_id)
  {
    $this->db->select('*');
    $this->db->from('course');
    $this->db->where('course_id', $c_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $r = $query->row();
      return $r->course_name;
    }
  }

  function print_request($id)
  {
    $this->db->where('sem_reg.std_id', $id);
    $this->db->from('sem_reg');
    $this->db->join('stdreg', 'sem_reg.std_id=stdreg.std_id');
    $this->db->join('stdpersonal', 'sem_reg.std_id=stdpersonal.std_id');
    $this->db->join('credits', 'sem_reg.std_id=credits.std_id');
    $query = $this->db->get();
    $request = $query->row();

    $total_c = $request->first_sem + $request->sec_sem + $request->third_sem + $request->forth_sem + $request->fifth_sem + $request->sixth_sem + $request->seventh_sem;
    $regcourse = $this->student_model->regcourse($id);
    $regcourse->sub1 = $this->student_model->courseDetails($regcourse->sub1);
    $regcourse->sub2 = $this->student_model->courseDetails($regcourse->sub2);
    $regcourse->sub3 = $this->student_model->courseDetails($regcourse->sub3);
    $regcourse->sub4 = $this->student_model->courseDetails($regcourse->sub4);
    $regcourse->sub5 = $this->student_model->courseDetails($regcourse->sub5);
    $regcourse->sub6 = $this->student_model->courseDetails($regcourse->sub6);
    $regcourse->sub7 = $this->student_model->courseDetails($regcourse->sub7);
    $regcourse->sub8 = $this->student_model->courseDetails($regcourse->sub8);
    $regcourse->sub9 = $this->student_model->courseDetails($regcourse->sub9);
    $regcourse->sub10 = $this->student_model->courseDetails($regcourse->sub10);

    $output = " <center>
    <table border='3'>
        <caption>GOVERNMENT ENGINEERING COLLEGE IDUKKI</caption>
        <tr>
            <th colspan='3'><b>STUDENT REGISTRATION FORM</b></th>
        </tr>
        <tr>
            <th>NAME</th>
            <td colspan='2'>" . $request->std_name . "</td>
        </tr>
        <tr>
            <th>BRANCH</th>
            <td colspan='2'>" . $request->branch . "</td>
        </tr>
        <tr>
            <th>SEMESTER</th>
            <td colspan='2'>" . $request->semester . "</td>
        </tr>
        <tr>
            <th>REGISTRATION NUMBER</th>
            <td colspan='2'>" . $request->universityregno . "</td>
        </tr>
        <tr>
            <th>ADMISSION NUMBER</th>
            <td colspan='2'>" . $request->admission_no . "</td>
        </tr>
        <tr>
            <th>EMAIL</th>
            <td colspan='2'>" . $request->email . "</td>
        </tr>
        <tr>
            <th>PHONE NUMBER</th>
            <td colspan='2'>" . $request->phone . "</td>
        </tr>
        <tr>
            <th rowspan='8'>CREDITS EARNED</th>
            <td>s1</td>
            <td>" . $request->first_sem  . "</td>
        </tr>
        <tr>
            <td>s2</td>
            <td>" . $request->sec_sem . "</td>
        </tr>
        <tr>
            <td>s3</td>
            <td>" . $request->third_sem . "</td>
        </tr>
        <tr>
            <td>s4</td>
            <td>" . $request->forth_sem . "</td>
        </tr>
        <tr>
            <td>s5</td>
            <td>" . $request->fifth_sem . "</td>
        </tr>
        <tr>
            <td>s6</td>
            <td>" . $request->sixth_sem . "</td>
        </tr>
        <tr>
            <td>s7</td>
            <td>" . $request->seventh_sem . "</td>
        </tr>
        <tr>
            <td>TOTAL CREDIT</td>
            <td>" . $total_c . "</td>
        </tr <tr>
        <th>CGPA TILL DATE</th>
        <td colspan='2'>" . $request->cgpa . "</td>
        </tr>
        <tr>
            <th rowspan='11'>COURSES SELECTED</th>
            <th>COURSE</th>
        </tr>
        <tr>
            <td>" . $regcourse->sub1 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub2 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub3 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub4 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub5 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub6 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub7 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub8 . "</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub9 . ".</td>
            
        </tr>
        <tr>
            <td>" . $regcourse->sub10 . ".</td>
            
        </tr>
        <tr>
            <th colspan='3'>Viewed and verified by ADVISOR and HOD</th>
        </tr>
        <tr>
            <th>STUDENT SIGNATURE</th>
            <td colspan='2'></td>
        </tr>
        <tr>
            <th>PRINCIPAL SIGNATURE</th>
            <td colspan='2'></td>
        </tr>
    </table>
</center>
";
    return $output;
  }
}
