<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  Export_model extends CI_Model	{


		public function get_all_data()
		{
			$this->db->from('table_user');
			$this->db->join('table_agama','table_user.agama_id = table_agama.agama_id');
			$this->db->order_by('user_id','desc');
			$query = $this->db->get();
			return $query->result();	
		}

		public function get_export_byjk($jk)
		{
			$this->db->from('table_user');
			$this->db->join('table_agama','table_user.agama_id = table_agama.agama_id');
			$this->db->where('jenis_kelamin',$jk);
			$this->db->order_by('user_id','desc');
			$query = $this->db->get();
			return $query->result();	
		}

		public function get_export_agama($agama)
		{
			$this->db->from('table_user');
			$this->db->join('table_agama','table_user.agama_id = table_agama.agama_id');
			$this->db->where('table_user.agama_id',$agama);
			$this->db->order_by('user_id','desc');
			$query = $this->db->get();
			return $query->result();	
		}

		public function get_agama()
		{
			$this->db->from('table_agama');
			$this->db->order_by('agama_id','asc');
			$query = $this->db->get();
			return $query->result();
		}
	}