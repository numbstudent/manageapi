<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
        $this->load->model('m_main');
        $this->load->library('table');


		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
        // $tabledata = array(
        //     array('Name', 'Color', 'Size'),
        //     array('Fred', 'Blue', 'Small'),
        //     array('Mary', 'Red', 'Large'),
        //     array('John', 'Green', 'Medium')
        // );
        // $table = $this->table->generate($tabledata);
        $template = array(
            'table_open'            => '<table id="tblApiList" style="font-size:9pt;" border="1" cellpadding="4" cellspacing="0">',

            'thead_open'            => '<thead>',
            'thead_close'           => '</thead>',

            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',

            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',

            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td>',
            'cell_end'              => '</td>',

            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td>',
            'cell_alt_end'          => '</td>',

            'table_close'           => '</table>'
        );

        $this->table->set_template($template);

        $f_url = $this->input->get('f_url');
        $f_request_type = $this->input->get('f_request_type');
        $f_parameters = $this->input->get('f_parameters');
        $f_result = $this->input->get('f_result');
        $f_createdon = $this->input->get('f_createdon');

        $like = array();
        $like['url'] = $f_url;
        $like['request_type'] = $f_request_type;
        $like['parameters'] = $f_parameters;
        $like['result'] = $f_result;
        $like['createdon'] = $f_createdon;
        $query = $this->m_main->get_api_list($like);
        $table = $this->table->generate($query);
        $data = array(
            'table'=>$table
        );

		$this->load->view('header');
        $data['sidebar'] = $this->load->view('v_sidebar', NULL, TRUE);
		$this->load->view('v_admin',$data);
		$this->load->view('footer');
	}

    function api_list(){
        $data = array();
		$this->load->view('header');
        $data['sidebar'] = $this->load->view('v_sidebar', NULL, TRUE);
		$this->load->view('v_api_list',$data);
		$this->load->view('footer');
    }


	function recordsubmission(){
        $template = array(
            'table_open'            => '<table id="tblApiList" style="font-size:9pt;" border="1" cellpadding="4" cellspacing="0">',

            'thead_open'            => '<thead>',
            'thead_close'           => '</thead>',

            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',

            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',

            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td>',
            'cell_end'              => '</td>',

            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td>',
            'cell_alt_end'          => '</td>',

            'table_close'           => '</table>'
        );

        $this->table->set_template($template);

        $f_cli = $this->input->post('f_cli');
		$f_to = $this->input->post('f_to');
		$f_msg = $this->input->post('f_msg');
		$f_uuid = $this->input->post('f_uuid');

        $like = array();
        $like['p_cli'] = $f_cli;
        $like['p_to'] = $f_to;
        $like['p_msg'] = $f_msg;
        $like['p_uuid'] = $f_uuid;
        $query = $this->m_main->get_api_from_operator($like);
        $table = $this->table->generate($query);
        $data = array(
            'table'=>$table
        );

		$this->load->view('header');
        $data['sidebar'] = $this->load->view('v_sidebar', NULL, TRUE);
		$this->load->view('v_recordsubmission_list',$data);
		$this->load->view('footer');
	}

    function guidv4($data = null) {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

	function generate_api(){
        $str = $this->guidv4();
        $apikey = hash ( "sha256", $str );
        $validdate = date('Y/m/d', strtotime('+7 days'));

        $data = array(
            'apikey' => $apikey,
            'validuntil' => $validdate,
        );
        $result = $this->m_main->insert_apikey($data);
        redirect(base_url("apikeylist"));
	}

    function apikey_list(){
        $template = array(
            'table_open'            => '<table id="tblApiKeyList" style="font-size:9pt;" border="1" cellpadding="4" cellspacing="0">',

            'thead_open'            => '<thead>',
            'thead_close'           => '</thead>',

            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',

            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',

            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td>',
            'cell_end'              => '</td>',

            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td>',
            'cell_alt_end'          => '</td>',

            'table_close'           => '</table>'
        );

        $this->table->set_template($template);

        $query = $this->m_main->get_apikey();
        $table = $this->table->generate($query);
        $data = array(
            'table'=>$table
        );

		$this->load->view('header');
        $data['sidebar'] = $this->load->view('v_sidebar', NULL, TRUE);
		$this->load->view('v_apikey_list',$data);
		$this->load->view('footer');
	}
}