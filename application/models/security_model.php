<?php
Class Security_Model extends CI_Model
{
    /**
	 * @author unnikrishnan
	 **/
    public function __construct()
    {
        parent::__construct();
    }
    public function check_log_in_admin()
    {
        if ($this->session->userdata('logged_in')) {
        } else {
            $this->session->set_flashdata('errormsg', "You Are Not Logged In.Please Login");
            redirect('admin');
        }
    }

    public function check_log_in_faculty()
    {
        if ($this->session->userdata('logged_in')) {
        } else {
            $this->session->set_flashdata('errormsg', "You Are Not Logged In.Please Login");
            redirect('Front');
        }
    }
}
