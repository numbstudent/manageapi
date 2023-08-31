<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_main');
	}
 
	public function index(){
		// $url = 'http://103.179.56.140:7771/api/getnumber.php?user=jsu&pass=77jsu77&limit=2';
		// $url = 'http://103.179.56.140:7771/api/getnumber.php';
		// $sample_param = 'user:jsu;pass:77jsu77;limit:50';

		// $url = 'https://api.genderize.io';
		// $sample_param = 'name:jono';

		// $url = 'http://103.179.56.140:7771/api/getsms.php';
		// $sample_param = 'user:jsu;pass:77jsu77;number:085771363810';

		// $url = 'http://ip:8888/louissmsginbound.php';
		// $sample_param = 'user:jsu;pass:77jsu77;number:6285859538256';

		// $param = $sample_param;

		$param = $this->input->post("parameters");
		$url = $this->input->post("url");
		$request_type = $this->input->post("request_type");
		try {
			if(!$url || !is_string($url) || ! preg_match('/^http(s)?:\/\/[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(\/.*)?$/i', $url)){
				echo "Invalid url!";
			}else{
				if(strtolower($request_type) == 'post'){
					$this->post_url($url, $param);
				} else if (strtolower($request_type) == 'get'){
					$this->get_url($url, $param);
				}
			}
		} catch (Exception $e) {
			echo 'Web cannot be accessed.';
		}
	}
 
	public function halo(){
		$data['nama_web'] = "MalasNgoding.com";
		$this->load->view('view_belajar',$data);
	}

	function save_record($url,$request_type,$parameters,$response_code,$output){
		$data = array(
			'url' => $url,
			'request_type' => $request_type,
			'parameters' => $parameters,
			'response_code' => $response_code,
			'result' => $output
		);
		$result = $this->m_main->insert_api($data);
	}

	function get_url($url,$param){
		$original_url = $url;
		// create curl resource
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
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
		if (!curl_errno($ch)) {
			$response_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
			$this->save_record($original_url,'GET',$param,$response_code,$output);
		}
		curl_close($ch);  
		echo $output;
	}

	function post_url($url,$param){
		$original_url = $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
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
			curl_setopt($ch, CURLOPT_POSTFIELDS,
				http_build_query($param_arr));
		}

		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$output = curl_exec($ch);

		if (!curl_errno($ch)) {
			$response_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
			$this->save_record($original_url,'POST',$param,$response_code,$output);
		}
		curl_close($ch);  
		echo $output;
	}
}
