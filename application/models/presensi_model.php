<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presensi_model extends CI_Model
{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function get_all_post()
		{
			$query = $this->db->get('siswa');
			return $query->result(); 
                }
		function add_new_entry($nis,$name)
		{
			$data = array(
				'nis' => $nis,
				'name'=> $name
			);
			$this->db->insert('siswa',$data);
                                            
		}
}

/* $this->db->select('*'); //sementara
 * $query = $this->db->get('siswa');
 * if ($query->num_rows() > 0){
 * return $query->result_array();
 * } 
 */
     