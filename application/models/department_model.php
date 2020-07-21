<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Department_model extends CI_Model
{

  /**
   * @author unnikrishnan
   **/


  // admin login check

  public function valid($department_id, $password)
  {
    $this->db->select('*');
    $this->db->from('due_dept');
    $this->db->where('department_id', $department_id);
    $this->db->where('password', $password);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  // get staff details

  public function getdept($dept_id)
  {
    $this->db->select('*');
    $this->db->from('due_dept');
    $this->db->where('dept_id', $dept_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }


  public function getstudent()
  {
    $this->db->select('*');
    $this->db->from('stdreg');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }
  public function getdue()
  {
    $this->db->select('*');
    $this->db->from('due_type');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }


  public function getstudents($branch, $semester)
  {
    $this->db->select('s.std_id,s.std_name,s.admission_no,s.branch,s.semester,s.universityregno,s.std_credits');
    $this->db->from('stdreg AS s, course as c');
    $this->db->where('s.semester=', $semester);
    $this->db->where('s.branch=', $branch);


    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function getbranch()
  {
    $this->db->select('*');
    $this->db->from('course');
    $this->db->group_by('branch');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }


  public function getsemester()
  {
    $this->db->select('*');
    $this->db->from('course');
    $this->db->group_by('semester');

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }
  public function getmydues($id, $due)
  {
    $this->db->from('due_amount');
    $this->db->where('student_id', $id);
    $this->db->where('due_id', $due);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row();
    }
  }

  public function save_due($std_id, $amount, $due)
  {
    $data = array(
      'due_id' => $due,
      'student_id' => $std_id,
      'amount' => $amount
    );
    $this->db->where('student_id', $std_id);
    $this->db->where('due_id', $due);
    $q = $this->db->get('due_amount');

    if ($q->num_rows() > 0) {
      $this->db->where('student_id', $std_id);
      $this->db->where('due_id', $due);
      return $this->db->update('due_amount', $data);
    } else {
      $this->db->where('student_id', $std_id);
      $this->db->where('due_id', $due);
      return $this->db->insert('due_amount', $data);
    }
  }
}
