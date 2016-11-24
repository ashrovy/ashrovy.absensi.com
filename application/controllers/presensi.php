<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presensi extends CI_Controller
{
		function __construct()
		{
			parent::__construct();
			$this->load->model('presensi_model');
			$this->load->helper('url');
		}
		
				
		function index()
		{
			$data['query'] = $this->presensi_model->get_all_post();
			$this->load->view('presensi/index', $data);
		}
		
		function add_new_entry()
		{
			$this->load->helper('form');
			$this->load->library(array('form_validation','session'));
			
			$this->form_validation->set_rules('nis','Nis','required');
			$this->form_validation->set_rules('name','Name','required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('presensi/add_new_entry');
			}
			else
			{
				$nis = $this->input->post('nis');
				$name = $this->input->post('name');
                                //
                                //$mapel = $this->input->post('mapel');
                                //
				$this->presensi_model->add_new_entry($nis,$name);
				$this->session->set_flashdata('message','data telah ditambah');
				redirect('index.php/presensi/add_new_entry');
			}
		}
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */