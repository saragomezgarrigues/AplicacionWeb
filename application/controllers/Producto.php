<?php
class Producto extends CI_Controller{
    public function crear(){
        $this->load->model('categoria_model','',true);
        $datos['categorias'] = $this->categoria_model->listData();
        getplantailla($this, 'producto/crear',$datos);
    }
    
    public function crearDato(){
        $this->load->model('producto_model','',true);
        $explode = explode(" ) ",$_POST['categoria']);
        $data = [
          'ID'          => $_POST['id'],
          'nombre'      => $_POST['nombre'],
          'precio'      => $_POST['precio'],
          'IDCategoria'   => $explode[0]
        ];
        
        $this->producto_model->insert($data);
    }
}