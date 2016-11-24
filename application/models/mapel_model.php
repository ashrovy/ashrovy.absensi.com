<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapel_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_all_mapel(){
        $query1 = $this->db->get('tmapel');
        return $query1->result();
    }
    
    function add_new_mapel($mapel){
        
        $data1 = array(
        'mapel' => $mapel
        );
        $this->db->insert('tmapel',$data1);
    }
}