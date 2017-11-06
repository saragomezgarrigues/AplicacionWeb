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
          'nombreP'      => $_POST['nombre'],
          'precio'      => $_POST['precio'],
          'IDCategoria'   => $explode[0]
        ];
        
        $this->producto_model->insert($data);
    }
    
    public function listar(){
        //Función que permite al cliente ver el listado completo de todos los productos que tiene
        //en la BBDD.
        $this->load->model('producto_model','',true);
        $datos['productos'] = $this->producto_model->getData();
        getplantailla($this, 'producto/listar',$datos);
    }
    
    public function borrar(){
        //Función que permite al cliente ver el listado de todos los productos que tiene puestos
        //en la BBDD, más la opción de borrar ;)
        //Esa es la función extra :D
       $this->load->model('producto_model','',true);
       $datos['productos'] = $this->producto_model->getData();
       getplantailla($this,'producto/borrar',$datos);
    }
    
    public function delete(){
        //Para borrar definitivamente los productos que el usuario estime oportuno.
        $this->load->model('producto_model','',true);
        $producto = isset($_COOKIE['Producto'])?$_COOKIE['Producto']:null;
        $this->producto_model->borrar($producto);
        unset($_COOKIE['Producto']);
    }
}