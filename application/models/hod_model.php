<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Hod_model extends CI_Model
{

  /**
   * @author unnikrishnan
   **/


  // HOD login check

  public function valid($user_id, $password)
  {
    $this->db->select('*');
    $this->db->from('hod');
    $this->db->where('user_id', $user_id);
    $this->db->where('password', $password);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function gethod($hod_id)
  {
    $this->db->select('*');
    $this->db->from('hod');
    $this->db->where('hod_id', $hod_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function getstudent($department)
  {
    $this->db->select('*');
    $this->db->from('stdreg');
    $this->db->where('branch', $department);
    $this->db->join('sem_reg', 'sem_reg.std_id = stdreg.std_id');

    $this->db->where('status', "approved");
    $this->db->where('hod_status', 0);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function getstudentsem($std_id)
  {
    $this->db->select('*');
    $this->db->from('stdreg');
    $this->db->where('std_id', $std_id);
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
    $this->db->select('course_name');
    $this->db->from('course');
    $this->db->where('course_id', $c_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $r = $query->row();
      return $r->course_name;
    }
  }


  public function updatesem($id, $semester)
  {
    if ($semester == 'S1') {
      $sem = 'S2';
    } else if ($semester == 'S2') {

      $sem = 'S3';
    } else if ($semester == 'S0') {

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
    $this->db->set('semester', $sem);
    $this->db->where('std_id', $id);
    $this->db->update('stdreg');
  }

  public function hod_status()
  {
    $reg_id = $_REQUEST['reg_id'];
    $std_id = $_REQUEST['std_id'];
    $sem = $_REQUEST['sem'];
    
    $data = array(
      'semester' => $sem
    );

    $this->db->where('std_id', $std_id);
    $this->db->update('stdreg', $data);
    $hod_status = $_REQUEST['hod_status'];
    if ($hod_status == 1) {
      $status = 0;
    } else {
      $status = 1;
    }
    $data = array(
      'hod_status' => $status
    );
    $this->db->where('sem_reg_id', $reg_id);
    return $this->db->update('sem_reg', $data);
  }
}
