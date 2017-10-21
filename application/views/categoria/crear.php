<script>
    $(document).ready(function(){
       $('#btnCrear').on('click',function(){
            alert("Se ha pulsado el boton de crear. A validar los datos! :D");
            var catRegex= /^([A-ZÁÉÍÓÚÑñ])?[a-záéíóúñ?¿ºª ]{1,25}$/;
            var data = $('#nombre').val();
            if(catRegex.test(data)){
                $('#nombre').parent().removeClass('has-error');
                $('#nombre').parent().addClass('has-success');
                var formulario = document.getElementById("createCategory");
                var datosSerializados = serialize(formulario);
                 conexion=new XMLHttpRequest();
                conexion.open('POST','<?php echo base_url()?>Categoria/crearDato',true);
                conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		conexion.send(datosSerializados);
		conexion.onreadystatechange = function() {
			if (conexion.readyState==4 && conexion.status==200) {
				accionAJAX();
			}
		}
              
            }
            else{
                $('#nombre').parent().removeClass('has-success');
                $('#nombre').parent().addClass('has-error');
            }
       }); 
    });
    function accionAJAX(){
        var textoRecibido = conexion.responseText;
        $('.modal-body p').val(textoRecibido);
    }
</script>
<div class="container">
    <h1>Bienvenido al apartado de creación de categorías</h1>
    <h5>para crear una categoría, rellena los campos del formulario</h5>
    <form class="form-horizontal" role="form" id="createCategory">
        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre de la categoria: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombreCategoria">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="button"  id="btnCrear" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Categoría!</button>
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
          <p></p>
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

