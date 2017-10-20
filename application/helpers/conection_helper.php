<?php
/*
   Helper para poder cargar de una forma más rápida la conexion con la BBDD
*/
function getConnectionData(){
    include_once 'lib/rb.php';
    R::setup('mysql:host=localhost;dbname=aplicacion','root','');
}

