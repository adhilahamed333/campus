<?php if(!defined('BASEPATH')){exit('No direct script access allowed');}

class Hod_model extends CI_Model{

 /**
     * @author unnikrishnan
     **/


// HOD login check

     public function valid($user_id, $password)
     {
       $this -> db -> select('*');
       $this -> db -> from('hod');
       $this -> db -> where('user_id', $user_id);
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

     public function gethod($hod_id)
         {
           $this->db->select('*');
           $this->db->from('hod');
           $this->db->where('hod_id', $hod_id);
           $query =$this->db->get();
           if($query->num_rows()>0)
           {
           return $query->result();
          }
        }

      public function getstudent($department)
          {
            $this->db->select('*');
            $this->db->from('stdreg');
            $this->db->where('branch',$department);
            $query =$this->db->get();
            if($query->num_rows()>0)
            {
            return $query->result();
           }
         }

      public function getstudentsem($std_id)
        {
          $this->db->select('*');
          $this->db->from('stdreg');
          $this->db->where('std_id',$std_id);
          $query =$this->db->get();
          if($query->num_rows()>0)
          {
          return $query->result();
         }
        }

      public function getstdperbyid($std_id)
        {
          $this->db->select('*');
          $this->db->from('stdpersonal');
          $this->db->where('std_id', $std_id);

          $query =$this->db->get();
          if($query->num_rows()>0)
          {
            return $query->result();
          }
        }

      public function regcourse($std_id)
      {
        $this->db->select('*');
        $this->db->from('sem_reg');
        $this->db->join('course','sem_reg.course_id = course.course_id');
        $this->db->where('std_id', $std_id);
        $query =$this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }
      }

      public function hod_status()
  		{
  			$reg_id = $_REQUEST['reg_id'];
  			$hod_status = $_REQUEST['hod_status'];
  			if ($hod_status == 1)
  			{
  				$status = 0;
  			}
  			else
  			{
  				$status = 1;
  			}
  			$data = array(
  					'hod_status' => $status
  			);
  			$this->db->where('sem_reg_id',$reg_id);
  			return $this->db->update('sem_reg',$data);
  		}


	}


?>
