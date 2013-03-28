<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library(array('unit_test'));
		$this->load->helper(array('url'));
		$this->load->model(array('test_model'));
		
		$this->theme = 'commerce';
	}
	
	public function index(){
		$data[''] = '';
		
		$test = 1 + 1;
		$expected_result = 2;
		$test_name = 'Adds one plus one';
		$this->unit->run($test, $expected_result, $test_name);

		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/content_view', $data);
		$this->load->view( $this->theme . '/footer_view');
		
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */