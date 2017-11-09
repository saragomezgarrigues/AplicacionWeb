<?php
function getplantailla($controller,$view,$datos=[]){
    $controller->load->view('templates/head');
    $controller->load->view($view,$datos);
    $controller->load->view('templates/footer'); 
}
function getplantillaAJAX($controller,$view,$datos=[]){
    //Plantilla en caso de que se hagan peticiones en AJAX
    $controller->load->view($view,$datos);
}