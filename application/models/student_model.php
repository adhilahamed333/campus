<?php if(!defined('BASEPATH')){exit('No direct script access allowed');}

class Student_model extends CI_Model{

 /**
     * @author Unnikrishnan
     **/
     public function addstd($data)
     {
       return $this->db->insert('stdreg',$data);
      }

      public function stdpersonal($admission)
      {
        return $this->db->insert('stdpersonal',$admission);
       }

      public function valid($user_email, $password)
      {
        $this -> db -> select('*');
        $this -> db -> from('stdreg');
        $this -> db -> where('admission_no', $user_email);
        $this -> db -> where('password', $password);
        // $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
          return $query->result();
        }
        else
        {  return false;
        }}

        public function getstd($std_id)
        {
          $this->db->select('*');
      		$this->db->from('stdreg');
          $this->db->join('staff','stdreg.staff_id = staff.s_id');
          $this->db->where('std_id', $std_id);

          $query =$this->db->get();
          if($query->num_rows()>0)
          {
          return $query->result();

        }}

        public function update_std($data,$id){
          return $this->db->where('std2_id',$id)->update('stdpersonal',$data);
        }

        public function getstdpersonal($user_adno)
        {
          $this->db->select('*');
      		$this->db->from('stdpersonal');
          $this->db->where('admission_no', $user_adno);

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

        public function sem_reg($std_id,$course_id,$advisor)
        {
          $query="INSERT INTO sem_reg (std_id,course_id,advisor_id) values($std_id,$course_id,$advisor)";
          return $this->db->query($query);

         }

         public function getregdetails($std_id)
         {
           $this->db->select('*');
       		$this->db->from('sem_reg');
           $this->db->where('std_id', $std_id);

           $query =$this->db->get();
           if($query->num_rows()>0)
           {
             return $query->result();
           }
         }
		 
		 
		   public function advisor()
         {
           $this->db->select('*');
       		$this->db->from('staff');

           $query =$this->db->get();
           if($query->num_rows()>0)
           {
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
		 
		 


}
?>
