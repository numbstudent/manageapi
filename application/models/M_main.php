<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_main extends CI_Model{	
	private $table = 'api_list';
	
	function get_api_list($like = array()){
		$this->db->like($like);
		$this->db->order_by('createdon DESC');
		$this->db->select("URL,
				REQUEST_TYPE,
				REPLACE(PARAMETERS, \";\", \"<br>\") AS PARAMETERS,
				RESULT,CREATEDON", FALSE);
		return $this->db->get('api_list');
	}

	function insert_api($data){
		return $this->db->insert('api_list', $data);
	}

	function insert_api_from_operator($data){
		return $this->db->insert('record_from_operator', $data);
	}

	function get_api_from_operator($like = array(),$limit = null){
		if($limit != null){
			$this->db->limit($limit);
		}
		$this->db->like($like);
		$this->db->order_by('p_createdon DESC');
		$this->db->select("P_CLI AS 'cli',
				P_TO AS 'to',
				P_MSG AS 'msg',
				P_UUID AS 'uuid',
				P_CREATEDON AS 'createdon'", FALSE);
		return $this->db->get('record_from_operator');
	}

	function get_apikey($where = array()){
		$this->db->where($where);
		$this->db->order_by('createdon DESC');
		$this->db->select("CONCAT(\"<code>\",APIKEY,\"</code>\") AS APIKEY,
				IF (VALIDUNTIL<CURDATE(),CONCAT(VALIDUNTIL,\" (EXPIRED)\"),VALIDUNTIL) AS VALIDUNTIL,
				CREATEDON", FALSE);
		return $this->db->get('api_key');
	}

	function insert_apikey($data){
		return $this->db->insert('api_key', $data);
	}
}