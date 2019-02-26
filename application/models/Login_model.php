<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto_model
 *
 * @author john.cristobal
 */
class Login_model extends CI_Model{
    
    public function getUser($mail,$pass){
        $this->db->select('*')->from('usuarios')->where("correo",$mail)->where("password",$pass);
        $query = $this->db->get();

        if ($query->num_rows() > 0 )
        {
            return true;
        }else{
            return false;
        }
    }
}
