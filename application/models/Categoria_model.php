<?php
class Categoria_model extends CI_Model{
    public $ID,$nombre;
    function insertData($data){  
        //@TODO Ver alguna manera de hacer que no me tenga que preocupar por los autonuméticos.
        return $this->db->insert('categorias',$data);
    } 
    
    function listData(){
        return $this->db->get('categorias')->result();
    }
    
    function getLastID(){
        $sql = "SELECT ID FROM CATEGORIAS ORDER BY ID DESC LIMIT 1";
        $result = $this->db->query($sql)->result();
        if($result==''){
            return 0;
        }
        else{
            return $result;
        }
    }
}
