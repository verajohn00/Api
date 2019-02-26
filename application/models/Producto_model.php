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
class Producto_model extends CI_Model{
    
    public function getProductos(){
        $this->db->select('*')->from('productos')->where("estatus",1);
        $query = $this->db->get();

        if ($query->num_rows() > 0 )
        {
            $data = $query->result();
            return $data;
        }else{
            return "";
        }
    }
    
    public function updateShop($id,$total){
        $data = array("cantidad" => $total);
        
        $this->db->where("id",$id);
        $this->db->update("productos",$data);
        
        if($total == 0){
            $data = array("estatus" => 0);

            $this->db->where("id",$id);
            $this->db->update("productos",$data);            
        }
        
        
    }
    
    public function getCategorias(){
        $this->db->select('*')->from('categoria');
        $query = $this->db->get();

        if ($query->num_rows() > 0 )
        {
            $row = $query->result();
            return $row;
        }
    }
    
    public function getCategoriasById($id){
        $this->db->select('*')->from('productos')->where('categoria',$id);
        $query = $this->db->get();

        if ($query->num_rows() > 0 )
        {
            $row = $query->result();
            return $row;
        }
    }
    
    public function getNombreById($i){
        $last_row=$this->db->select('descripcion')->from('categoria')->where('id',$i)->get()->row();
        return $last_row;                           
    }
}
