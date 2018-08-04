<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  Datatable_standar_model extends CI_Model	{


		public function get_all_data()
		{
			$this->db->from('table_user');
			$this->db->join('table_agama','table_user.agama_id = table_agama.agama_id');
			$this->db->order_by('user_id','desc');
			$query = $this->db->get();
			return $query->result();
			
			
		}
	}