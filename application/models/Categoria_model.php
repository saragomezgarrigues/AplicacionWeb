<?php
class Categoria_model extends CI_Model{
    public $ID,$nombre;
    function insertData($data){    
        return $this->db->insert('categorias',$data);
    } 
    
    function listData(){
        return $this->db->get('categorias')->result();
    }
}
