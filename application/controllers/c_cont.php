<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cont extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('c_models');
			$this->load->helper('form', 'url');
	}


	public function registro()
	{
		$nombre = $this->input->post('nombre');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$fi = $this->input->post('fi');
		$fn = $this->input->post('fn');
		$edad = $this->input->post('edad');
		$peso = $this->input->post('peso');
		$plan = $this->input->post('plan');

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('foto')){

		$usuario_datos = array(
			'NOMBRE'=>$nombre,
			'EMAIL'=>$email,
			'PASSWORD'=>$password,
			'FI'=>$fi,
			'FN'=>$fn,
			'EDAD'=>$edad,
			'PESO'=>$peso,
			'PLAN'=>$plan,
			'FOTO'=>$this->upload->data());

		$usuario = $this->c_models->registrar_usuario($usuario_datos);

		if($usuario>0){
			echo "<script>alert('Usuario registrado exitosamente!!');</script>";
			$this->load->view('login');
		}
		else{
			echo "<script>alert('Vuelva a intentarlo mas tarde');</script>";
			$this->load->view('registro');
		}	
	  }else
		{
			$error = array('error' => $this->upload->display_errors());
			echo $error;
			
		}
	}
}
