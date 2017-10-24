<?php
class Producto_model extends CI_Model{
    public $ID,$nombre,$precio,$idCategoria;
    public function insert($arrayData){
        return $this->db->insert('productos',$arrayData);
    }
    
    public function getData(){
      //Nota a tener en cuenta: a Codeigniter no le mola que los nombres de los campos de las tablas sean iguales,
      //es decir, producto.nombre y categoria.nombre... El nombre tiene que ser distinto para que te devuelva los
      //valores que quieres exactamente :D :D
      $sql = "SELECT p.ID, p.nombreP, p.precio,c.nombre FROM productos p, categorias c WHERE c.ID= p.IDCategoria";
      $result = $this->db->query($sql)->result();
      return $result;        
    }
}