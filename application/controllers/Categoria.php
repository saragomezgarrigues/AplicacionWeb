<?php
class Categoria extends CI_Controller{
    public function crear(){
        getplantailla($this, 'categoria/crear');
    }
 
    public function crearDato(){
        //Funcion para poder enviarle los datos encapsulados al modelo y que este haga la inserción en la BBDD con los datos que
        //ha escrito el cliente.
        $this->load->model('categoria_model','',true);
        $data= [
                'ID'    => $_POST['idCategoria'],
                'nombre'=> $_POST['nombreCategoria']
           ];
        $this->categoria_model->insertData($data);
    }
    
    public function listar(){
        $this->load->model('categoria_model','',true);
        $datos['categorias'] = $this->categoria_model->listData();
        getplantailla($this,'categoria/listar',$datos);
    }
    
    public function borrar(){
        
    }
}
