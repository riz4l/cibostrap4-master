<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __Construct()
	{
		parent::__Construct();

	}

	public function index()
	{
		$this->show();	
	}

	public function show()
	{
		$this->load->view('header');
		$this->load->view('home/data');
		$this->load->view('footer');
	}

}
