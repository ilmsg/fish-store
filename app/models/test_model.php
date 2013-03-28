<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoryObject {
	var $id, $name;
	public function __construct($id = '', $name = ''){
		$this->id = $id;
		$this->name = $name;
	}
}
		
class Test_model extends CI_Model {
	
    public function __construct(){
        parent::__construct();
		$this->load->database();
    }
	
	public function getCategories(){		
		return array(
			new CategoryObject('1', 'category1'),
			new CategoryObject('2', 'category2'),
			new CategoryObject('3', 'category3'),
			new CategoryObject('4', 'category4'),
		);
	}
	
}


/* End of file main_model.php */
/* Location: ./application/models/main_model.php */