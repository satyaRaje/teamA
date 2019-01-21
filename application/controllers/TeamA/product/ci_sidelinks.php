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
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewproduct_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewstl_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function generatequotation_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewquo_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewenquiry_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function viewbills_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
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
        $this->load->view('teamA/product/generate_quotations');
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
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function generatecoupon_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
    public function customercontact_fun()
    {
        $this->load->view('teamA/dashboard/admin/header');
        $this->load->view('teamA/product/generate_quotations');
        $this->load->view('teamA/dashboard/admin/footer');
    }
}
?>