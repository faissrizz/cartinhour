<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class inventory extends CI_Controller 
{	
	public function __construct() 
  {

		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('inventory_model'); 
			
 }
  public function dashboard(){
  	
	 
	if($this->session->userdata('userdetails'))
	 {		
		$data['seller_details'] = $this->inventory_model->get_all_seller_details();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('customer/inventry/header');
		$this->load->view('customer/inventry/sidebar');
		$this->load->view('customer/inventry/index',$data);
		$this->load->view('customer/inventry/footer');
	  
	  }
	  else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('customer');
	} 
	}

	public function categories()
	{
		$data['category'] = $this->inventory_model->get_seller_categories();
		//echo "<pre>";print_r($data);exit;
		$this->load->view('customer/inventry/header');
	  	$this->load->view('customer/inventry/sidebar');
	  	$this->load->view('customer/inventry/categories',$data);
	  	$this->load->view('customer/inventry/footer');
		
	}

	public function category_wise_sellers()
	{
		$cid = base64_decode($this->uri->segment(3));
		//print_r($data);exit;
		$data['seller_category'] = $this->inventory_model->get_seller_names($cid);
		//echo "<pre>";print_r($data);exit;
		$this->load->view('customer/inventry/header');
	  	$this->load->view('customer/inventry/sidebar');
	  	$this->load->view('customer/inventry/category_wise_sellers',$data);
	  	$this->load->view('customer/inventry/footer');
	}

	public function seller_id_database()
	{
		$data['database_id'] = $this->inventory_model->get_seller_databaseid();
		//echo "<pre>";print_r($data);exit;
		 $this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/seller_databaseid',$data);
	   	$this->load->view('customer/inventry/footer');
	}


	public function seller_payments()
	{
		$data['seller_payment'] = $this->inventory_model->get_seller_payments();
		//echo "<pre>";print_r($data);exit;
		 $this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/seller_payments',$data);
	   	$this->load->view('customer/inventry/footer');
	}

	public function inventory_management()
	{
		$data['inventory_management'] = $this->inventory_model->get_inventory_management();
		//echo "<pre>";print_r($data);exit;
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/inventory_management',$data);
	   	$this->load->view('customer/inventry/footer');
	}
	public function catalog_management()
	{
		$data['catalog_management'] = $this->inventory_model->get_catalog_management();
		//echo "<pre>";print_r($data);exit;
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/catalog_management',$data);
	   	$this->load->view('customer/inventry/footer');
	}

	public function both()
	{
		$data['both'] = $this->inventory_model->get_both();
		//echo "<pre>";print_r($data);exit;
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/both',$data);
	   	$this->load->view('customer/inventry/footer');
	}


	public function home_page_banner()
	{
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/home_page_banner');
	   	$this->load->view('customer/inventry/footer');
	}
	public function top_offers()
	{
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/top_offers');
	   	$this->load->view('customer/inventry/footer');
	}
	public function deals_of_day()
	{
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/deals_of_day');
	   	$this->load->view('customer/inventry/footer');
	}
	public function season_sales()
	{
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/season_sales');
	   	$this->load->view('customer/inventry/footer');
	}
	public function others()
	{
		$this->load->view('customer/inventry/header');
	   	$this->load->view('customer/inventry/sidebar');
	   	$this->load->view('customer/inventry/others');
	   	$this->load->view('customer/inventry/footer');
	}

	
	
  
 

  
 




}		
?>