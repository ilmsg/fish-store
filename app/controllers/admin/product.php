<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->model(array('admin_model'));
		
		$this->theme = 'admin';
	}
	
	public function lists(){
		$data['categories'] = $this->admin_model->getProductsLists();
		
		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/product/lists_view', $data);
		$this->load->view( $this->theme . '/footer_view');
		
	}
	
	public function add(){
		$data[''] = '';
		
		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/product/add_view', $data);
		$this->load->view( $this->theme . '/footer_view');
		
	}
	
	public function save(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		if( $name ){
			$this->admin_model->saveProduct( $id, $name );
		}
		
		redirect('admin/product/lists');	
	}
	
	public function del( $cid = 0 ){
		if( $cid ){
			$this->admin_model->deleteProduct( $cid );
		}
		
		redirect('admin/product/lists');		
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */