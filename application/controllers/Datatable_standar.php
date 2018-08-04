<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  Datatable_standar extends CI_Controller	{

		public function __Construct()
		{
			parent::__Construct();

				$this->load->model('Datatable_standar_model','Mdl');
		}	

		public function index()
		{
			$user_data['link_group_datatable'] = 'show';
			$user_data['link_datatable_standar'] = 'active';
			$user_data['query'] = $this->Mdl->get_all_data();
			$this->load->view('header',$user_data);
			$this->load->view('datatable/datatable_standar',$user_data);
			$this->load->view('footer');
		}
	}