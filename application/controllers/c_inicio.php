<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inicio extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	public function registro()
	{
		$this->load->view('registro');
	}

	public function menu()
	{
		$this->load->view('menu');
	}

}
