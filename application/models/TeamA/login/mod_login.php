<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_Login extends CI_Model {

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
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function register_success($data){
       $this->db->insert('tbllogin',$data);
        if($this->db->affected_rows() > 0)
        {
            // Code here after successful insert
            return true; // to the controller
        }else{
            return false;
        }
    }


}

?>