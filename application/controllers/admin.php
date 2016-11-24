<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    function index(){
        $this->load->view('admin/index');
    }
    
    function presensi(){
        $this->load->view('presensi/add_new_entry');        
    }
        
}