<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		
	}
 
	public function index(){
		// $url = 'http://103.179.56.140:7771/api/getnumber.php?user=jsu&pass=77jsu77&limit=2';
		$url = 'http://103.179.56.140:7771/api/getnumber.php';
		$sample_param = 'user:jsu;pass:77jsu77;limit:2';

		// $url = 'http://103.179.56.140:7771/api/getsms.php';
		// $sample_param = 'user:jsu;pass:77jsu77;number:6285859538256';
		$this->get_url($url,$sample_param);
	}
 
	public function halo(){
		$data['nama_web'] = "MalasNgoding.com";
		$this->load->view('view_belajar',$data);
	}

	function get_url($url,$param){
		// create curl resource
		$ch = curl_init();

		// set url
		if ($param != '') {
			$params = explode (";", $param);
			$param_arr = [];
			foreach ($params as $value) {
				try {
					$item = explode(":", $value);
					$key = $item[0];
					$val = $item[1];
					$param_arr[$key] = $val;
				} catch (Exception $e) {
					echo 'Parameter: '.$value.' is faulty.';
				}
			}
			$url = $url . '?' . http_build_query($param_arr);
		}
		curl_setopt($ch, CURLOPT_URL, $url);

		//return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// $output contains the output string
		$output = curl_exec($ch);

		// close curl resource to free up system resources
		curl_close($ch);  
		echo $output;
	}

	function post_url($url,$param){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		// curl_setopt($ch, CURLOPT_POSTFIELDS,
		// 			"postvar1=value1&postvar2=value2&postvar3=value3");


		// In real life you should use something like:
		// curl_setopt($ch, CURLOPT_POSTFIELDS, 
		//          http_build_query(array('postvar1' => 'value1')));

		if ($param != '') {
			$params = explode (";", $param);
			$param_arr = [];
			foreach ($params as $value) {
				try {
					$item = explode(":", $value);
					$key = $item[0];
					$val = $item[1];
					$param_arr[$key] = $val;
				} catch (Exception $e) {
					echo 'Parameter: '.$value.' is faulty.';
				}
			}
			var_dump($param_arr);
			curl_setopt($ch, CURLOPT_POSTFIELDS,
				http_build_query($param_arr));
		}

		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$output = curl_exec($ch);

		curl_close($ch);  
		echo $output;
	}
}
