<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  Datatable_serverside extends CI_Controller	{

		public function __Construct()
		{
			parent::__Construct();

				$this->load->model('Datatable_serverside_model','mdl');
		}	

		public function index()
		{
			$user_data['link_group_datatable'] = 'show';
			$user_data['link_datatable_serverside'] = 'active';
			$this->load->view('header',$user_data);
			$this->load->view('datatable/datatable_serverside',$user_data);
		}

		public function ajax_list()
		{
			$list = $this->mdl->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach($list as $post)
			{
				$no++;
				$row = array();
				$row[] = $post->nama;
				$row[] = $post->tempat_lahir.'/'.$post->tanggal_lahir;
				$row[] = $post->jenis_kelamin;
				$row[] = $post->agama;
				$row[] = $post->no_telephone;
				$row[] = $post->email;
				$row[] = '<a href="javascript:void(0)" onclick="detail('."'".$post->user_id."'".')">Lihat</a>';
				//add html for action
				$row[] = '<a class="btn btn-xs btn-primary" href="'.base_url().'#'.$post->user_id.'" title="Edit"><i class="glyphicon glyphicon-edit"></i> Edit</a>
					  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Remove" onclick="trash_post('."'".$post->user_id."'".')"><i class="glyphicon glyphicon-trash"></i> Remove</a>';

				$data[] = $row;
			} 

				$output = array(
							"draw"=>$_POST['draw'],
							"recordsTotal"=> $this->mdl->count_all(),
							"recordsFiltered"=> $this->mdl->count_filtered(),
							"data"=> $data
				);

			echo json_encode($output);
		}

		public function ajax_detail($id)
		{

			$data = $this->mdl->get_by_id($id);

			echo json_encode($data);
		}

	}