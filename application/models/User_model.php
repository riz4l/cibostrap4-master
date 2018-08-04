<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  User_model extends CI_Model	{

		var $table= 'table_user';
		var $column_order = array('nama','tanggal_lahir','jenis_kelamin','agama','no_telephone','email','alamat',null);
		var $column_search = array('nama','tanggal_lahir','jenis_kelamin','agama','no_telephone','email','alamat');
		var $order = array('user_id'=>'desc');

		private function _get_datatables_query ()
		{

			$this->db->from($this->table);

			$i = 0;

			foreach($this->column_search as $item)
			{
				if($_POST['search']['value']){

					if($i===0)
					{	
						$this->db->group_start();
						$this->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search) - 1 == $i)
						$this->db->group_end();
				}
				$i++;
			}

			if(isset($_POST['order']))
			{
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			}
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		public function get_datatables()
		{	
			$this->_get_datatables_query();
			$this->db->join('table_agama','table_user.agama_id=table_agama.agama_id');
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}

		public function count_filtered()
		{
			$this->_get_datatables_query();
			$this->db->join('table_agama','table_user.agama_id=table_agama.agama_id');
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function count_all()
		{
			$this->db->from($this->table);
			$this->db->join('table_agama','table_user.agama_id=table_agama.agama_id');
			return $this->db->count_all_results();
		}

		public function get_by_id($id)
		{
			$this->db->from($this->table);
			$this->db->where('user_id', $id);
	    	$query = $this->db->get();
	    	return $query->row();
		}

		public function get_agama()
		{
			$this->db->from('table_agama');
			$this->db->order_by('agama_id','asc');
			$query = $this->db->get();
			return $query->result();
		}

		public function save($data)
		{
			$this->db->insert($this->table,$data);
			return $this->db->insert_id();
		}

		public function update($data, $where){

	    	$this->db->update($this->table, $data, $where);
	    	return $this->db->affected_rows();

	    }

		public function delete_by_id($id){
	    	
	    	$this->db->where('user_id',$id);
	    	$this->db->delete($this->table);
	    }

	}