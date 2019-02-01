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
       // parent::Controller();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('email');
        //$this->ci =& get_instance();
    }

    public function index()
    {
        $this->load->view('TeamA/login/header_view1');
        $this->load->view('TeamA/login/user_login');
        $this->load->view('TeamA/login/footer_view1');
    }

    public function admin_dashboard(){
        $this->load->view('TeamA/dashboard/admin/panel');
    }


    public function customer_dashboard(){
        
        $this->load->view('TeamA/dashboard/customer/Customer_panel');
        
    }

    public function user_login_page(){
        $this->load->view('TeamA/login/user_login');
        $this->load->view('TeamA/login/footer_view1');
    }
    public function login_page(){
        $this->load->view('TeamA/login/login');
        $this->load->view('TeamA/login/footer_view1');
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
                 $this->email->from('hello@ipro3d.io', 'Mr. Yogesh Pawar');
                 $this->email->to($_POST['name']);
                $this->email->subject('OTP IPRO3d 3d Printing');
                $this->email->message('Thank for initiating registration process. Please do not share your OTP with anyone. Your OTP for registration is '.$rand);
                if($this->email->send())
                {
                 $result['email_otp']=$rand;
                 
                 $result['status']=true;
                 $result['otp_message']="OTP Successfully Send...";
                }else{
                    $result['email_otp']=0;
                 $result['status']=false;
                 $result['otp_message']="SERVER ERROR.";
                    
                }
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
        if($this->mod->register_success($data)==true){

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
            $a= send_message($_POST['name'],$rand);
            $result['otp_message']="OTP Send Successfully...";
        echo json_encode($result);
        //}else{
        //$result['mobile_otp']="Unable to send";
        //}

    }

    public function email_exist_check(){
        header('Access-Control-Allow-Origin: *');
        $query=$this->db->query("select id,password as email,mobile,dir_url,flag from tbllogin where email='".$_POST['name']."' limit 1");
        $result = array();
        $result['password']=null;
      //  session_start();
          $this->load->library('session');
        foreach ($query->result() as $row)
        {
            $result['password']=$row->email;
            $result['email']=$_POST['name'];
            $result['mobile']=$row->mobile;
            $result['user_id']=$row->id;
            $result['dir_url']=$row->dir_url;
            $result['flag']=$row->flag;
        }
        if($result['password']!=null){

            $result['status']=true;
            $s=array(
                'email'=>$result['email'],
                'mobile'=>$result['mobile'],
                'user_id'=>$result['user_id'],
                'dir_url'=>$result['dir_url'],
                'flag'=>$result['flag']

            );
        //    $this->session->unset_userdata($result);
           // $this->session->set_userdata('name','gaurav');
             //session_regenerate_id();
            $this->session->set_userdata($result);

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
        //$this->load->library('session');
        
        //$this->session->set_userdata($s);
        echo json_encode($result);
     }
     
     public function login_success(){
         $p=md5($_POST['password']);
        $query=$this->db->query("select id,password as pwd,mobile,dir_url,flag from tbllogin where email='".$_POST['email']."' && password='".$p."'");
        $result = array();
        $result['password']=null;
      //  session_start();
          $this->load->library('session');
        foreach ($query->result() as $row)
        {
            $result['password']=$row->pwd;
            $result['email']=$_POST['email'];
            $result['mobile']=$row->mobile;
            $result['user_id']=$row->id;
            $result['dir_url']=$row->dir_url;
            $result['flag']=$row->flag;
        }
        
        //
        //if($result['password']!=null){
            $this->session->set_userdata($result);
           // print_r($_SESSION);
           
           if($result['flag']=='0'){
           header("Location: ".base_url()."index.php/TeamA/login/login/customer_dashboard");
           }else if($result['flag']=='1'){
               header("Location: ".base_url()."index.php/TeamA/login/login/admin_dashboard");
           }else{
            echo "Wrong Password";
           }
            //echo "<script>location.href = ".base_url().'index.php/TeamA/login/login/customer_dashboard'.";</script>";
            
        //}else{
            
        //}
        
     
     }

}

?>