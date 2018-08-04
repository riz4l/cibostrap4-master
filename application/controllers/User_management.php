<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  User_management extends CI_Controller	{

		public function __Construct()
		{
			parent::__Construct();

				$this->load->model('User_model','mdl');
		}	

		public function index()
		{
			$user_data['link_user'] = 'active';
			$this->load->view('header',$user_data);
			$this->load->view('user/data',$user_data);
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
				$row[] = '<a class="btn btn-xs btn-primary" href="'.base_url().'user_management/edit/'.$post->user_id.'" title="Edit"><i class="fa fa-edit"></i> Edit</a>
					  <a class="btn btn-xs btn-danger" href="javascript:void(0)" title="Remove" onclick="delete_post('."'".$post->user_id."'".')"><i class="fa fa-trash"></i> Remove</a>';

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

		public function add()
		{
			$user_data['link_user'] = 'active';
			$user_data['agama'] = $this->mdl->get_agama();
			$this->load->view('header',$user_data);
			$this->load->view('user/add',$user_data);
		}

		public function ajax_add()
		{
			$this->_validate();

			$data = array(
					'nama'=>$this->input->post('nama'),
					'tempat_lahir'=>$this->input->post('tempat_lahir'),
					'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
					'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
					'agama_id'=>$this->input->post('agama_id'),
					'no_telephone'=>$this->input->post('no_telephone'),
					'email'=>$this->input->post('email'),
					'alamat'=>$this->input->post('alamat')
				);

			$insert = $this->mdl->save($data);
			echo json_encode(array("status"=>TRUE));
		}

		public function edit($id)
		{
			$user_data['link_user'] = 'active';
			$user_data['agama'] = $this->mdl->get_agama();
			$user_data['get_data'] = $this->mdl->get_by_id($id);
			$this->load->view('header',$user_data);
			$this->load->view('user/edit',$user_data);
		}

		public function ajax_update()
		{
			$this->_validate();

			$data = array(
					'nama'=>$this->input->post('nama'),
					'tempat_lahir'=>$this->input->post('tempat_lahir'),
					'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
					'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
					'agama_id'=>$this->input->post('agama_id'),
					'no_telephone'=>$this->input->post('no_telephone'),
					'email'=>$this->input->post('email'),
					'alamat'=>$this->input->post('alamat')
				);
			
			$this->mdl->update($data, array('user_id'=>$this->input->post('user_id')));
			echo json_encode(array(
									"status"=>TRUE
									));
		}

		public function ajax_delete($id)
		{
			$data = $this->mdl->delete_by_id($id);

			echo json_encode($data);
		}

		private function _validate(){

			$data  = array();
			$data['error_string'] = array();
			$data['inputerror'] = array();
			$data['status'] = TRUE;

			if($this->input->post('nama') == ''){
				$data['inputerror'][] = 'nama';
				$data['error_string'][] = 'Nama harus diisi';
				$data['status'] = FALSE;
			} 

			if($this->input->post('email') == ''){
				$data['inputerror'][] = 'email';
				$data['error_string'][] = 'Email harus diisi';
				$data['status'] = FALSE;
			} 

			if($data['status'] === FALSE){
				echo json_encode($data);
				exit();
			}
		}

	}