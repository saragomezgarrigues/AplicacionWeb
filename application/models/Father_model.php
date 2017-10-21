<?php
class Father_model extends CI_Model{
    function getConnectionData($dataArray){
    include_once 'lib/rb.php';
    R::setup('mysql:host=localhost;dbname=aplicacion','root','');
    }  
}