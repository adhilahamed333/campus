<?php if(!defined('BASEPATH')){exit('No direct script access allowed');}

class Admin_model extends CI_Model{

 /**
     * @author unnikrishnan
     **/


// admin login check

     public function check($user_email, $password)
     {
       $this -> db -> select('*');
       $this -> db -> from('admin');
       $this -> db -> where('admin_email', $user_email);
       $this -> db -> where('admin_password', $password);
       $this -> db -> where('admin_type', 1);
       $this -> db -> limit(1);

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
     }

// get staff details

     public function getstaff()
         {
           $this->db->select('*');
           $this->db->from('staff');
           $query =$this->db->get();
           if($query->num_rows()>0)
           {
           return $query->result();
          }
        }
    public function deletestaff($id)
        {
          return $this ->db->delete('staff',array('s_id'=>$id));
        }

    public function getSinglestaff($id)
        {
          $query = $this->db->get_where('staff',array('s_id' => $id));
          if($query->num_rows()>0)
          {
            return $query->row();
          }
        }
    public function updatestaff($data,$id)
        {
          return $this->db->where('s_id',$id)->update('staff',$data);
        }

// add coursename

    public function addcourse($data)
    {
      return $this->db->insert('course',$data);
     }

     public function getcourse()
     {
       $this->db->select('*');
       $this->db->from('course');
       $query =$this->db->get();
       if($query->num_rows()>0)
       {
       return $query->result();
      }
    }

    public function deletecourse($id)
        {
          return $this ->db->delete('course',array('course_id'=>$id));
        }

    public function getSinglecourse($id)
        {
          $query = $this->db->get_where('course',array('course_id' => $id));
          if($query->num_rows()>0)
          {
            return $query->row();
          }
        }

    public function updatecourse($data,$id)
        {
          return $this->db->where('course_id',$id)->update('course',$data);
        }


########################################### DUE Department Session #############################################

    public function adddept($data)
    {
      return $this->db->insert('due_dept',$data);
     }

     public function getdept()
       {
         $this->db->select('*');
         $this->db->from('due_dept');
         $query =$this->db->get();
         if($query->num_rows()>0)
         {
         return $query->result();
        }
      }
    public function deletedept($id)
        {
          return $this ->db->delete('due_dept',array('dept_id'=>$id));
        }

    public function getSingledept($id)
        {
          $query = $this->db->get_where('due_dept',array('dept_id' => $id));
          if($query->num_rows()>0)
          {
            return $query->row();
          }
        }
    public function updatedept($data,$id)
        {
          return $this->db->where('dept_id',$id)->update('due_dept',$data);
        }


        public function valid($dept_id, $password)
        {
          $this -> db -> select('*');
          $this -> db -> from('due_dept');
          $this -> db -> where('department_id', $dept_id);
          $this -> db -> where('password', $password);

          $query = $this -> db -> get();

          if($query -> num_rows() == 1)
          {
            return $query->result();
          }
          else
          {
            return false;
          }
        }


  ########################################### DUE Department Session #############################################

      public function addhod($data)
      {
        return $this->db->insert('HOD',$data);
       }

       public function gethod()
         {
           $this->db->select('*');
           $this->db->from('HOD');
           $query =$this->db->get();
           if($query->num_rows()>0)
           {
           return $query->result();
          }
        }
      public function deletehod($id)
          {
            return $this ->db->delete('HOD',array('hod_id'=>$id));
          }

      public function getSinglehod($id)
          {
            $query = $this->db->get_where('HOD',array('hod_id' => $id));
            if($query->num_rows()>0)
            {
              return $query->row();
            }
          }
      public function updatehod($data,$id)
          {
            return $this->db->where('hod_id',$id)->update('HOD',$data);
          }

      //
      //     public function valid($dept_id, $password)
      //     {
      //       $this -> db -> select('*');
      //       $this -> db -> from('due_dept');
      //       $this -> db -> where('department_id', $dept_id);
      //       $this -> db -> where('password', $password);
      //
      //       $query = $this -> db -> get();
      //
      //       if($query -> num_rows() == 1)
      //       {
      //         return $query->result();
      //       }
      //       else
      //       {
      //         return false;
      //       }
      //     }
      //     {
      //
      //     }
	}


?>
