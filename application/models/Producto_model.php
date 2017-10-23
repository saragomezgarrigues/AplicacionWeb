<?php
class Producto_model extends CI_Model{
    public $ID,$nombre,$precio,$idCategoria;
    public function insert($arrayData){
        return $this->db->insert('productos',$arrayData);
    }
}