<?php
function getplantailla($controller,$view){
    $controller->load->view('templates/head');
    $controller->load->view($view);
    $controller->load->view('templates/footer'); 
}
