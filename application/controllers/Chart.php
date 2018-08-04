<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class Chart extends CI_Controller	{

		public function __Construct()
		{
			parent::__Construct();

				$this->load->model('Chart_model','Mdl');
		}	

		public function index()
		{
			$user_data['link_chart'] = 'active';
			$user_data['data'] = $this->Mdl->get_data_stok();
			$this->load->view('header',$user_data);
			$this->load->view('chart/data',$user_data);
		}
	}