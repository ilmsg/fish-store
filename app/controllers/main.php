<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		
		$this->theme = 'commerce';
	}
	
	public function index(){
		$data[''] = '';
		
		$this->load->view( $this->theme . '/header_view');
		$this->load->view( $this->theme . '/content_view', $data);
		$this->load->view( $this->theme . '/footer_view');
		
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */