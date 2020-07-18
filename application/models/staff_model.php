<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Staff_model extends CI_Model
{

  /**
   * @author Unnikrishnan
   **/

  public function valid($user_email, $password)
  {
    $this->db->select('*');
    $this->db->from('staff');
    $this->db->where('username', $user_email);
    $this->db->where('password', $password);
    $this->db->where('status ', 0);
    // $this -> db -> limit(1);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function addstaff($data)
  {
    return $this->db->insert('staff', $data);
  }

  public function getstudent($staff_id)
  {
    $this->db->select('*');
    $this->db->from('stdreg');
    $this->db->where('staff_id', $staff_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function deletestudent($id)
  {
    return $this->db->delete('stdreg', array('std_id' => $id));
  }

  public function getSinglestudent($id)
  {
    $query = $this->db->get_where('stdreg', array('std_id' => $id));
    if ($query->num_rows() > 0) {
      return $query->row();
    }
  }

  public function updatestudent($data, $id)
  {
    return $this->db->where('std_id', $id)->update('stdreg', $data);
  }

  public function getstudentcredits($id)
  {
    //$query = $this->db->get_where('credits',array('std_id' => $id));
    $this->db->select('*');
    $this->db->from('credits');
    $this->db->where('std_id', $id);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->row();
    }
  }

  public function getMyDues($id)
  {
    //$query = $this->db->get_where('credits',array('std_id' => $id));
    $this->db->select('*');
    $this->db->from('due_amount');
    $this->db->where('student_id', $id);
    $this->db->join('due_dept', 'due_dept.dept_id = due_amount.due_id');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function updatecredits($data, $id)
  {
    return $this->db->where('std_id', $id)->update('credits', $data);
  }

  public function updatetotalcredits($std_credits, $id)
  {
    return $this->db->where('std_id', $id)->update('stdreg', $std_credits);
  }

  public function getstaff($staff_id)
  {
    $this->db->select('*');
    $this->db->from('staff');
    $this->db->where('s_id', $staff_id);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }


  public function addcredits($data)
  {
    return $this->db->insert('credits', $data);
  }

  public function insert_date($start_date, $end_date, $staff_id)
  {
    $data = array(
      'date' => $start_date,
      'end_date' => $end_date,
      'staff_id' => $staff_id
    );
    return $this->db->insert('sem_display_date', $data);
  }
  public function getSemdate()
  {
    $date = date("Y-m-d");
    $this->db->select('*');
    $this->db->from('sem_display_date');
    $this->db->where('date', $date);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $sem_date = 'exists';
      return $sem_date;
    }
  }



  public function semester_request_list($name)
  {

    $this->db->select('sem_reg.hod_status,sem_reg.sem_reg_id,sem_reg.status,stdreg.std_name as student_name,stdreg.due_amount,due_type.type');
    $this->db->from('sem_reg');
    $this->db->join('staff', 'sem_reg.advisor_id = staff.s_id');
    $this->db->join('stdreg', 'sem_reg.std_id = stdreg.std_id');
    $this->db->join('due_type', 'due_type.id = stdreg.due');
    $this->db->where('sem_reg.status', 'pending', 'stdreg.name', $name);
    $this->db->group_by('stdreg.std_id');


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

  public function semester_request_hod($id)
  {

    $data = array(
      'hod_status'      => 'pending',
    );

    $this->db->where('sem_reg_id', $_POST['id']);
    return $this->db->update('sem_reg', $data);
  }
}
