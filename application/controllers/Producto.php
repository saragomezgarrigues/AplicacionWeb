<?php
class Producto extends CI_Controller{
    public function crear(){
        $this->load->model('producto_model','',true);
        $this->load->model('categoria_model','',true);
        $datos['categorias'] = $this->categoria_model->listData();
        $datos['last_id'] = $this->producto_model->getLastId();
        //print_r($datos);
        getplantailla($this, 'producto/crear',$datos);
    }
    
    public function crearDato(){
        $this->load->model('producto_model','',true);
        $data = [
          'ID'          => $_POST['id'],
          'nombreP'      => $_POST['nombre'],
          'precio'      => $_POST['precio'],
          'IDCategoria'   => $_POST['categoria']
        ];
        //print_r($data);
        //exit("-->");
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
        //Método mejorado con respecto a la vez pasada :)
        $this->load->model('producto_model','',true);
        $producto = $_POST['producto'];
        $this->producto_model->borrar($producto);
       
    }
    
    public function modificar(){
        //En este caso, será para poder modificar los datos de algún producto porque
        //nos hemos dado cuenta de que están mal puestos.
        $this->load->model("producto_model",'',true);
        $datos['productos'] = $this->producto_model->getData();
        getplantailla($this, 'producto/modificar',$datos);
    }
    
    public function update(){
        //Paso 2 de la modificacion: El usuario modifica los datos que ha introducido antes.
        $this->load->model("producto_model",'',true);
        $producto = $_POST['producto'];
        $datos['productos'] = $this->producto_model->getDataProduct($producto);
        //print_r($datos);
        //exit("-->");
        getplantailla($this,'producto/update',$datos);
    }
}