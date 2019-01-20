<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ci_upload_product extends CI_Controller {

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
        $this->load_panel_data();
    }

   public function upload_stl_file(){
       $this->load->model('TeamA/product/product_model','up');

            $rand = rand(55555,444444);
       if(!is_file( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname'])){
           mkdir( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname'], 0777, true);
       }

       if(!is_file( getcwd().'/uploads/user/'.$this->session->dir_url."/product/stl")){
           mkdir( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname']."/stl", 0777, true);
       }
       if(!is_file( getcwd().'/uploads/user/'.$this->session->dir_url."/product/view")){
           mkdir( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname']."/view", 0777, true);
       }

       $config['upload_path']   = getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname']."/stl/";
       $config['allowed_types'] = 'pdf|zip';
       $config['max_size']      = 200000000;
       //$config['max_width']     = 1024;
       ///$config['max_height']    = 768;
       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('userfile')) {
           $error = array('error' => $this->upload->display_errors());
           //$this->load->view('upload_passage', $error);
           print_r($error);
       }

       else {
           $data = array('upload_data' => $this->upload->data());
           $test=array(
               'file'=>$this->upload->data('file_name'),
               'pname'=>$_POST['pname'],
               'flag'=>0,
               'userid'=>$this->session->user_id
           );
         //  $this->load->model('upload_product');
           $this->db->insert('tblproduct',$test);
           $this->load_panel_data();
           echo "Success";
           //$this->load->view('upload_success', $data);

       }


   }

    public function load_panel_data(){
        $user=$this->session->userdata('user');
        $query = $this->db->get_where('tblproduct', array('userId' =>$this->session->user_id,'flag'=>'0'));
        $data['data'] = $query->result();
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/upload_product',$data);
        $this->load->view('teamA/dashboard/admin/footer');

    }

     public function remove_stl_file(){
         $data = array('flag' => '1');

         $where = "userId =".$this->session->user_id." and id=".$_POST['product_id'];

         $str = $this->db->update_string('tblproduct', $data, $where);
         $this->db->query($str);
         //echo $str;
         $this->load_panel_data();
     }
}

?>