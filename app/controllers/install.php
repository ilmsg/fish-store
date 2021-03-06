<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Install extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		
		$this->theme = 'install';
	}
	
	public function index(){
		$this->load->database();
		
		// โหลด sql จากไพล์
		// $sql = $this->load->view( $this->theme . '/install_sql_view', '', true);
		
		$sqls = array(
			'CREATE DATABASE IF NOT EXISTS \'fish-store\' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;',
			'DROP TABLE IF EXISTS \'tbl_order\';',
			'CREATE TABLE IF NOT EXISTS \'tbl_order\' (
				\'order_id\' int(11) NOT NULL AUTO_INCREMENT,
				\'order_user\' int(11) NOT NULL,
			PRIMARY KEY (\'order_id\')
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;',
			'DROP TABLE IF EXISTS \'tbl_product\';',
			'CREATE TABLE IF NOT EXISTS \'tbl_product\' (
				\'product_id\' int(11) NOT NULL AUTO_INCREMENT,
				\'product_title\' varchar(255) NOT NULL,
				\'product_description\' text NOT NULL,
				\'product_price\' decimal(10,0) NOT NULL,
				\'product_qty\' int(11) NOT NULL,
				PRIMARY KEY (\'product_id\')
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;',
			'DROP TABLE IF EXISTS \'tbl_sessions\';',
			'CREATE TABLE IF NOT EXISTS \'tbl_sessions\' (
				\'session_id\' varchar(40) NOT NULL DEFAULT \'0\',
				\'ip_address\' varchar(45) NOT NULL DEFAULT \'0\',
				\'user_agent\' varchar(120) NOT NULL,
				\'last_activity\' int(10) unsigned NOT NULL DEFAULT \'0\',
				\'user_data\' text NOT NULL,
				PRIMARY KEY (\'session_id\'),
				KEY \'last_activity_idx\' (\'last_activity\')
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
			'DROP TABLE IF EXISTS \'tbl_slide\';',
			'CREATE TABLE IF NOT EXISTS \'tbl_slide\' (
			  \'slide_id\' int(11) NOT NULL AUTO_INCREMENT,
			  \'slide_title\' varchar(255) NOT NULL,
			  \'slide_img\' varchar(255) NOT NULL,
			  PRIMARY KEY (\'slide_id\')
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;',
			'DROP TABLE IF EXISTS \'tbl_user\';',			
			'CREATE TABLE IF NOT EXISTS \'tbl_user\' (
				\'user_id\' int(11) NOT NULL AUTO_INCREMENT,
				\'user_username\' varchar(255) NOT NULL,
				\'user_password\' varchar(255) NOT NULL,
				PRIMARY KEY (\'user_id\')
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;'
		);
		
		foreach( $sqls as $sql ){
			$result = $this->db->query( $sql );
			echo '<br>' . $sql;
			if( $result ){
				echo '<br>install success';
			}else{
				echo '<br>install fail';
			}
		}
		//$data[''] = '';
		
		//$this->load->view( $this->theme . '/header_view');
		//$this->load->view( $this->theme . '/content_view', $data);
		//$this->load->view( $this->theme . '/footer_view');
		
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */