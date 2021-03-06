<script>
$(document).ready(function(){
    //@TODO Hacer esto de una forma más eficiente, sin tener que repetir tanto codigo fuente ;)
    //@TODO Poner el código de serialización de los datos de mejnor forma, para evitar tener que estar repitiendo código fuente :D
    var nameRegex=/^([A-ZÁÉÍÓÚÑñ])?[a-záéíóúñ?¿ºª ]{1,200}$/;
    var precioRegex=/^[0-9]{1,4},[0-9]{2}$/;
    $('#btnCrear').on('click',function(){
        var contador =0;
        var precio =$('#precio').val();
        var nombre = $('#nombre').val();
        option = $('#sel1').val();
        if(precioRegex.test(precio)){
             $('#precio').parent().removeClass('has-error');
             $('#precio').parent().addClass('has-success');
             contador++;
        }
        else{
            $('#precio').parent().removeClass('has-success');
            $('#precio').parent().addClass('has-error');
        }
        if(nameRegex.test(nombre)){
            $('#nombre').parent().removeClass('has-error');
            $('#nombre').parent().addClass('has-success');
            contador++; 
        }
        else{
            $('#nombre').parent().removeClass('has-success');
            $('#nombre').parent().addClass('has-error');
        }
       
        if(contador===2 && option!=='nope'){
            var formulario = document.getElementById("formulario");
            var datosSerializados = serialize(formulario);
            conexion=new XMLHttpRequest();
            conexion.open('POST','<?php echo base_url()?>Producto/crearDato',true);
            conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            conexion.send(datosSerializados);
            accionAJAX("Producto creado correctamente");
        }
        else{
            accionAJAX("Revisa si ha elegido categoría y si los campos están correctamente rellenos");
        }
    });
});    
function accionAJAX(mensaje){
        $('#resultado').text(mensaje);
    }
</script>
<div class="container">
    <h1>Bienvenido al formulario de creación de Productos! :)</h1>
    <h4>Para poder crear un producto, rellena los campos del formulario</h4>
    <form class="form-horizontal" id="formulario" role="form">
        <div class="form-group">
    <label for="id" class="col-sm-2 control-label">ID del producto: </label>
    <div class="col-sm-10">
        <?php foreach($last_id as $number):?>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $number->ID + 1?>"disabled>
      <?php endforeach;?>
    </div>
  </div>
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre del producto: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>
   <div class="form-group">
    <label for="precio" class="col-sm-2 control-label">Precio: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="precio" name="precio">
    </div>
  </div>
   <div class="form-group">
    <label for="categoria" class="col-sm-2 control-label">Categoría: </label>
    <div class="col-sm-10">
        <select class="form-control" id="sel1" name="categoria">
            <option value="nope">----- SELECCIONA CATEGORÍA :) -------</option>
            <?php foreach($categorias as $categoria):?>
            <option value="<?php echo $categoria->ID?>"><?php echo $categoria->nombre?></option> 
            <?php endforeach;?>
        </select>
    </div>
  </div>     
   <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="button"  id="btnCrear" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Producto!</button>
             <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Resultado de la acción</h4>
        </div>
        <div class="modal-body">
          <p id="resultado"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
        </div>
    </div>
  
    </div>
  </div>
   </form>

  </div>



