<?php defined('BASEPATH') or exit('no direct script access allowed');

	class Download extends CI_Controller
	{
		public function index()
		{
			$user_data['link_download'] = 'active';
			$this->load->view('header',$user_data);
			$this->load->view('download/data',$user_data);
			$this->load->view('footer');
		}

		public function unduh_file($filename = NULL) {
		    // load download helder
		    $this->load->helper('download');
		    // read file contents
		    $data = file_get_contents(base_url('/upload/'.$filename));
		    force_download($filename, $data);
	   }
	}