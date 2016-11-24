<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapel extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('mapel_model');
        $this->load->helper('url');
    }
    
    function index(){
        $data1['query1'] = $this->mapel_model->get_all_mapel();
        $this->load->view('mapel/index',$data1);
    }
    
    function add_new_mapel(){
        $this->load->helper('form');
        $this->load->library(array('form_validation','session'));
        $this->form_validation->set_rules('mapel', 'Mapel','required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('mapel/add_new_mapel');
        } else {
           $mapel = $this->input->post('mapel');
           
           $this->mapel_model->add_new_mapel($mapel);
           $this->session->set_flashdata('message','Mata pelajaran telah ditambah');
           redirect('index.php/mapel/add_new_mapel');
        }
    }
    
}