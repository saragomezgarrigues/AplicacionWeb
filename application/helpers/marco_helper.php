<?php
function getplantailla($controller,$view,$datos=[]){
    $controller->load->view('templates/head');
    $controller->load->view($view,$datos);
    $controller->load->view('templates/footer'); 
}
