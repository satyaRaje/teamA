<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->view('TeamA/dashboard/admin/panel');
    }

    public function dashboard(){
        $this->load->view('TeamA/dashboard/admin/panel');
    }

    public function user_login_page(){
        $this->load->view('TeamA/login/user_login');
    }
    public function login_page(){
        $this->load->view('TeamA/login/login');
    }
    public function send_email_otp(){
        header('Access-Control-Allow-Origin: *');
        $rand=rand(55555,66666);
        $query=$this->db->query("select count(email) as email from tbllogin where email='".$_POST['name']."'");
        $result = array();
        foreach ($query->result() as $row)
        {
            $result['email_count']=$row->email;
        }

             if($result['email_count']>0){
                 $result['email_otp']=0;
                 $result['status']=false;
                 $result['otp_message']="Email Address Already Exist.";

             }else{
                 $result['email_otp']=$rand;
                 $result['status']=true;
                 $result['otp_message']="OTP Successfully Send...";
              }
        echo json_encode($result);
    }

    public function register_user(){
        header('Access-Control-Allow-Origin: *');
        $email=htmlentities($_POST['email']);
        $mobile=htmlentities($_POST['mobile']);
        $password=htmlentities($_POST['password']);
        $rand = rand(1,1111111);
         $data = array(
             'email'=>$email,
             'mobile'=>$mobile,
             'password'=>md5($password),
             'dir_url'=>$rand
         );
        $this->load->model('TeamA/login/mod_login','mod');
        $result=array();
        if($this->mod->register_success($data)===true){

            $result['status']=true;
            mkdir( getcwd().'/uploads/user/'.$rand, 0777, true);
            mkdir( getcwd().'/uploads/user/'.$rand."/product", 0777, true);

            echo json_encode($result);
        }else{
            $result['status']=false;
            $result['otp_message']="Unable to register please try again";
            echo json_encode($result);
        }

    }

    public function send_mobile_otp(){
        header('Access-Control-Allow-Origin: *');
        $rand=rand(55555,66666);
        $result = array();
        include 'sendotp/test.php';
            $result['mobile_otp']=$rand;
        //    $a= send_message($_POST['name'],$rand);
            $result['otp_message']="OTP Send Successfully...";
        echo json_encode($result);
        //}else{
        //$result['mobile_otp']="Unable to send";
        //}

    }

    public function email_exist_check(){
        header('Access-Control-Allow-Origin: *');
        $query=$this->db->query("select id,password as email,mobile,dir_url from tbllogin where email='".$_POST['name']."' limit 1");
        $result = array();
        $result['password']=null;

        foreach ($query->result() as $row)
        {
            $result['password']=$row->email;
            $result['email']=$_POST['name'];
            $result['mobile']=$row->mobile;
            $result['user_id']=$row->id;
            $result['dir_url']=$row->dir_url;
        }
        if($result['password']!=null){

            $result['status']=true;
            $s=array(
                'email'=>$result['email'],
                'mobile'=>$result['mobile'],
                'user_id'=>$result['user_id'],
                'dir_url'=>$result['dir_url']
            );
            $this->session->unset_userdata($result);
           // $this->session->set_userdata('name','gaurav');
            $this->session->set_userdata($s);

        }else{
            $result['status']=false;
            $result['password']="test";
            $result['email']="hello@ipro3d.io";
            $result['otp_message']="Email Does Not Exist.";

        }

        //print_r($result);
        echo json_encode($result);
    }

     public function encrypt_password(){
         header('Access-Control-Allow-Origin: *');
        $result=array();
        $result['enc']=md5($_POST['name']);
        $result['status']=true;
        echo json_encode($result);
     }

}

?>