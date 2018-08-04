<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  Datepicker extends CI_Controller	{

		public function __Construct()
		{
			parent::__Construct();

		}	

		public function index()
		{
			$user_data['link_datepicker'] = 'active';
			$this->load->view('header',$user_data);
			$this->load->view('datepicker/date_picker');
			$this->load->view('footer');
		}
	}