<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_models extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    public function registrar_usuario($usuario_datos){
       $result=$this->db->insert('usuarios', $usuario_datos);
       return $result;
    }

    public function login($usuario_credenciales){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where($usuario_credenciales);
        $query= $this->db->get();

        if ($query->num_rows()>0) {
           return true;
           } else {
              return false;
           }
    }

    public function get_usuario($usuario_credenciales){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where($usuario_credenciales);
        $query= $this->db->get();
        $rows = array();
        foreach($query->result_array() as $row)
        {    
            $rows[] = $row; 
        }
       return $rows;
    }



}


?>