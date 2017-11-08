<?php
class Categoria extends CI_Controller{
    public function crear(){
        //Mejora: ID de categoría rellenado automáticamente :)
        $this->load->model('categoria_model','',true);
        $datos['idCategoria'] = $this->categoria_model->getLastID();
        getplantailla($this, 'categoria/crear',$datos);
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
        //En el caso de que el cliente desee borrar uan categoria, lo que se va a 
        //mostrar son los resultados de todas las categorias y que haga click en la categoria 
        //que más le guste :D
        $this->load->model('categoria_model','',true);
        $datos['categorias'] = $this->categoria_model->listData();
        getplantailla($this, 'categoria/borrar',$datos);
    }
    
    public function delete(){
        //El usuario de verdad quiere borrar la categoría que ha seleccionado.
        $this->load->model('categoria_model','',true);
        $borrado = $_POST['categoria'];
        $this->categoria_model->delete($borrado);
    }
}
