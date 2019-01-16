<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{

	    //print_r($_SESSION);
		$this->load->view('TeamA/dashboard/customer/customer_panel');
	}
	/*niki's function call*/
	public function upload_product_fun()
	{
		$this->load->view('TeamA/product/upload_product');
	}
	public function view_stlfile_fun()
	{
		$this->load->view('TeamA/product/view_stlfile_view');
	}
	public function generate_quotation_fun()
	{
		$this->load->view('TeamA/product/generate_quotation_view1');
	}
	public function view_quotation_fun()
	{
		$this->load->view('TeamA/product/view_quotations_view');
	}
	
	public function add_blog_fun()
	{
		$this->load->view('TeamA/product/addblog_view');
	}
	public function newsletter_fun()
	{
		$this->load->view('TeamA/product/newsletter_view');
	}
/*	public function add_blog_fun()
	{
		$this->load->view('TeamA/product/addblog_view');
	}
	public function add_blog_fun()
	{
		$this->load->view('TeamA/product/addblog_view');
	}
	public function add_blog_fun()
	{
		$this->load->view('TeamA/product/addblog_view');
	}*/




	

}
