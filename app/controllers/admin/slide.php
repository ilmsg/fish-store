<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->model(array('admin_model'));
		
		$this->theme = 'admin';
	}
	
	public function index(){
		$data['slides'] = $this->admin_model->getSlideLists();
		
		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/slide/lists_view', $data);
		$this->load->view( $this->theme . '/footer_view');
	}
	
	/*
	public function lists(){
		$data['categories'] = $this->admin_model->getCategoriesLists();
		
		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/category/lists_view', $data);
		$this->load->view( $this->theme . '/footer_view');
		
	}
	
	public function add(){
		$data[''] = '';
		
		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/category/add_view', $data);
		$this->load->view( $this->theme . '/footer_view');
		
	}
	
	public function edit( $id = 0 ){
		if( $id ){
			$data['category'] = $this->admin_model->getCategory( $id );
			
			$this->load->view( $this->theme . '/header_view');
			$this->load->view( $this->theme . '/category/edit_view', $data);
			$this->load->view( $this->theme . '/footer_view');
		}else{
			redirect('admin/category/lists');
		}
	}
	
	public function save(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		if( $name ){
			$this->admin_model->saveCategory( $id, $name );
		}		
		redirect('admin/category/lists');	
	}
	
	public function del( $cid = 0 ){
		if( $cid ){
			$this->admin_model->deleteCategory( $cid );
		}		
		redirect('admin/category/lists');		
	}
	*/
}

/* End of file slide.php */
/* Location: ./application/controllers/admin/slide.php */