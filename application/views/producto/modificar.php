<script> 
    $(document).ready(function(){
            $('#btnBorrar').on('click',function(){
                bootbox.confirm({
                title: "¿Estás seguro?",
                message: "¿Estás seguro de modificar el producto?",
                buttons: {
                    cancel: {
                        label: '<i class="glyphicon glyphicon-remove"></i> No',
                        className: 'btn-danger'
                    },
                    confirm: {
                        label: '<i class="glyphicon glyphicon-ok"></i> Sí',
                        className: 'btn-success'
                    }
                },
                callback: function (result) {
                    console.log('This was logged in the callback: ' + result);
                     option = $('#sel1').val();
                    if(result && option!=='nope'){
                        console.log("Se modifica el producto");
                        var formulario = document.getElementById("formulario");
                        var datosSerializados = serialize(formulario);
                        conexion=new XMLHttpRequest();
                        conexion.open('POST','<?php echo base_url()?>Producto/update',true);
                        conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                        conexion.send(datosSerializados);
                        conexion.onreadystatechange = function(){
                            if (conexion.readyState===4 && conexion.status===200) {
				showData();
                             }
                        };
                        accionAJAX("Los datos del producto están cargados!☆☆");
                    }
                    else{
                       console.log("No se modifica el producto");
                       accionAJAX("No has elegido ningún producto!");
                    }
                }
            });

            });
    });
     function accionAJAX(mensaje){
        $('#resultado').text(mensaje);
       
    }
    function showData(){
        textoRecibido = conexion.responseText;
	document.getElementById("cargaDatos").innerHTML=textoRecibido;
    }
</script>
<div class="container">
    <h1>Elige el producto que quieras modificar</h1>
    <form id="formulario">
         <div class="form-group">
            <select class="form-control" id="sel1" name="producto">
                <option value="nope">-- ☆ SELECCIONA UN PRODUCTO ☆ --</option>
                <?php foreach($productos as $producto): ?>
                <option value="<?php echo $producto->ID?>"><?php echo $producto->nombreP?></option>
                <?php endforeach;?>
            </select>
         </div> 
        <div class="form-group">
            <button type="button"  id="btnBorrar" class="btn btn-info btn-lg" data-target="#myModal" data-toggle="modal" data-target="#myModal">Modificar Producto</button>
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
<div class="form-group" id="cargaDatos">
            
</div>