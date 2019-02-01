<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Marketplace extends CI_Controller {

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
    
    
    public function select_marketplace(){
        
        $d=array('flag' => '18');
        $query = $this->db->get_where('tblproduct',$d);
        $data['data'] = $query->result();
        $this->load->view('TeamA/marketplace/market',$data);
        
    }
    
    
    public function search_sort(){
        
             $query = "
              SELECT * FROM product WHERE product_status = '1'
             ";
             if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
             {
              $query .= "
               AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
              ";
             }
             if(isset($_POST["brand"]))
             {
              $brand_filter = implode("','", $_POST["brand"]);
              $query .= "
               AND product_brand IN('".$brand_filter."')
              ";
             }
             if(isset($_POST["ram"]))
             {
              $ram_filter = implode("','", $_POST["ram"]);
              $query .= "
               AND product_ram IN('".$ram_filter."')
              ";
             }
             if(isset($_POST["storage"]))
             {
              $storage_filter = implode("','", $_POST["storage"]);
              $query .= "
               AND product_storage IN('".$storage_filter."')
              ";
             }
            
             $statement = $connect->prepare($query);
             $statement->execute();
             $result = $statement->fetchAll();
             $total_row = $statement->rowCount();
             $output = '';
             if($total_row > 0)
             {
              foreach($result as $row)
              {
               $output .= '
               <div class="col-sm-4 col-lg-3 col-md-3">
                <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
                 <img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
                 <p align="center"><strong><a href="#">'. $row['product_name'] .'</a></strong></p>
                 <h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
                 <p>Camera : '. $row['product_camera'].' MP<br />
                 Brand : '. $row['product_brand'] .' <br />
                 RAM : '. $row['product_ram'] .' GB<br />
                 Storage : '. $row['product_storage'] .' GB </p>
                </div>
            
               </div>
               ';
              }
             }
             else
             {
              $output = '<h3>No Data Found</h3>';
             }
             echo $output;

        
    }

     
}

?>