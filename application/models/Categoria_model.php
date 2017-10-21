<?php
include_once 'lib/rb.php';
class Categoria_model extends CI_Model{
    function insertData($arrayData){
        R::setup('mysql:host=localhost;dbname=aplicacion','root','');
        $categoria = R::dispense('categoria');
        $categoria->nombre = $arrayData[0];
        R::store($categoria);
    }   
}
