<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        //$this->load->library('session');
        //$this->ci =& get_instance();
    }

    public function index()
    {
       // $this->load_panel_data();
    }

     public function select_enquiry(){
        $user=$this->session->userdata('user');
        $query = $this->db->get_where('tblenquiry', array('status'=>'0'));
        $data['data'] = $query->result();
        $this->load->view('TeamA/dashboard/admin/header');
        $this->load->view('TeamA/enquiry/enquiry',$data);
        $this->load->view('TeamA/dashboard/admin/footer'); 
     }    
}

?>