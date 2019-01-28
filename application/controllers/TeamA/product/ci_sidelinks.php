<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ci_sidelinks extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/dashboard/admin/panel');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewproduct_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/viewproduct_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewstlfile_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/viewstlfile_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function generatequotations_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generatequotations_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewquotations_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/viewquotations_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewenquiry_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/viewenquiry_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewbills_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/viewbills_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function addblog_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/addblog_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function addnews_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/newsletter_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function salehistory_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/salehistory_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function paymenthistory_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function producthistory_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/producthistory_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function generatecoupon_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generatecoupon_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function customercontact_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/customercontact_view');
        $this->load->view('teamA/dashboard/admin/footer');
    }
}
?>