<?php if(!defined('BASEPATH')){exit('No direct script access allowed');}

class Department_model extends CI_Model{

 /**
     * @author unnikrishnan
     **/


// admin login check

     public function valid($department_id, $password)
     {
       $this -> db -> select('*');
       $this -> db -> from('due_dept');
       $this -> db -> where('department_id', $department_id);
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

// get staff details

     public function getdept($dept_id)
         {
           $this->db->select('*');
           $this->db->from('due_dept');
           $this->db->where('dept_id', $dept_id);
           $query =$this->db->get();
           if($query->num_rows()>0)
           {
           return $query->result();
          }
        }


      public function getstudent()
          {
            $this->db->select('*');
            $this->db->from('stdreg');
            $query =$this->db->get();
            if($query->num_rows()>0)
            {
            return $query->result();
           }
         }
	}


?>
