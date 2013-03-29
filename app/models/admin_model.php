<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Admin_model extends CI_Model {
	
    public function __construct(){
        parent::__construct();
		$this->load->database();
    }
	
	public function getCategoriesLists(){
		return $this->db->get('categories');
	}
	
	public function getCategory( $id = 0 ){
		if( $id ){
			return $this->db->get_where('categories', array('id' => $id))->row();
		}else{
			return false;
		}
	}
	
	public function saveCategory( $id = 0, $name = '' ){
		if( $name ){
			$data = array('name' => $name);
			if( $id ){
				// update
				$this->db->update('categories', $data, array('id' => $id));
			}else{
				// insert
				return $this->db->insert('categories', $data );
			}
		}else{
			return false;
		}
	}
	
	public function deleteCategory( $id = '' ){
		if( $id ){
			return $this->db->delete('categories', array('id' => $id) );
		}else{
			return false;
		}
	}
}


/* End of file main_model.php */
/* Location: ./application/models/main_model.php */