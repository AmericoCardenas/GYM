<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_models extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    public function registrar_usuario($usuario_datos){
       $result = $this->db->insert('usuarios', $usuario_datos);
       return $result;
    }

    public function login($usuario_credenciales){
        $result = $this->db->where('usuarios',$usuario_credenciales);
        return $result;
    }

}


?>