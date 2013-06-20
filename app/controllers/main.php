<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->model(array('admin_model'));
		
		$this->theme = 'commerce';
	}
	
	public function index(){
		
		$data['products'] = $this->admin_model->getProductLists();
		$data['slides'] = $this->admin_model->getSlideLists();
		
		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/content_view', $data);
		$this->load->view( $this->theme . '/footer_view');
		
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */