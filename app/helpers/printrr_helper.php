<?php

function print_rr( $data = array() ){
	header('Content-type: text/html; charset=utf-8');
	//print "<meta charset='UTF-8' />";
	print "<pre>";
	print_r( $data );
	print "</pre>";
}

?>