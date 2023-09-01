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
}