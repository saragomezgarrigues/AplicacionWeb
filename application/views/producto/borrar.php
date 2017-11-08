<script>
    <?php
    /*@TODO Mejorar un poco el aspecto de los cuadros de diálogo, para que se parezcan más a los de 
    borrar categorías ;)
    */
    ?>
    $(document).ready(function(){
            $('#btnBorrar').on('click',function(){
                
                bootbox.confirm({
            title: "¿Estás seguro?",
            message: "¿Estás seguro de borrar el producto?",
            buttons: {
                cancel: {
                    label: '<i class="glyphicon glyphicon-remove"></i> Cancelar'
                },
                confirm: {
                    label: '<i class="glyphicon glyphicon-ok"></i> Aceptar'
                }
            },
            callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                 option = $('#sel1').val();
                if(result && option!=='no'){
                 console.log("Se borra el producto");
                 var formulario = document.getElementById("formulario");
                    var datosSerializados = serialize(formulario);
                    conexion=new XMLHttpRequest();
                    conexion.open('POST','<?php echo base_url()?>Producto/delete',true);
                    conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                    conexion.send(datosSerializados);
                    accionAJAX("Producto borrado correctamente");
                }
                else{
                   console.log("No se borra el producto");
                   accionAJAX("No has elegido ningún producto a borrar o el producto elegido no se va a borrar");
                }
            }
        });
           
        });
    });
     function accionAJAX(mensaje){
        $('#resultado').text(mensaje);
    }
</script>
<div class="container">
    <h1>Este es el formulario de borrado de productos.</h1>
    <h4>Para borrar un producto, elige el que quieras :) </h4>
    <form id="formulario">
         <div class="form-group">
            <select class="form-control" id="sel1" name="producto">
                 <option value="no">---- Producto a borrar :) -- </option>
                <?php foreach($productos as $producto): ?>
                    <option value="<?php echo $producto->ID?>"><?php echo $producto->nombreP?></option>
                <?php endforeach;?>

            </select>
         </div>
         <div class="form-group">
        <button type="button"  id="btnBorrar" class="btn btn-info btn-lg" data-target="#myModal" data-toggle="modal" data-target="#myModal">Borrar Producto</button>
        <!--
            Si se quiere colocar un modal, se tiene que poner aquí :D
        -->  
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
    </form>
    
</div>
