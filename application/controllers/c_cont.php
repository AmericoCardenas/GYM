<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cont extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('c_models');
			$this->load->helper(array('form', 'url'));
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
		$config['max_size']        = '15000';
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		

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
			'FOTO'=>$this->upload->data('file_name'));

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
			foreach($error as $item){
				echo $item;
			}
			
		}
	}

	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if(isset($email) && isset($password)){
			
			$usuario_credenciales = array(
			'EMAIL'=>$email,
			'PASSWORD'=>$password);
			
			$resultado = $this->c_models->login($usuario_credenciales); //SE VALIDA EMAIL Y PASSWORD
			$datos['usuario'] = $this->c_models->get_usuario($usuario_credenciales); //SE OBTIENEN LOS DATOS DEL USUARIO

			if($resultado){
				echo"<script>alert('Bienvenido');</script>";
				$this->load->view('menu',$datos);
			}else{
				echo"<script>alert('Credenciales Invalidas');</script>";
				$this->load->view('login');
			}

		}
	}
}
