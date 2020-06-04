<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function index()
	{
		$data['title'] = "Selamat Datang";
		$data['layout'] = "dashboard";
		
		$this->load->view('template',$data);
	}
}
