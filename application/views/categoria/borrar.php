<script>
    $(document).ready(function(){
            $('#btnBorrar').on('click',function(){
                bootbox.confirm({
                    title: "¿Estás seguro?",
                    message: "¿Estás seguro de borrar el producto?",
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
                        var option = $('#sel1').val();
                        if (result && option!=='nope'){
                            var formulario = document.getElementById("formulario");
                            var datosSerializados = serialize(formulario);
                            conexion=new XMLHttpRequest();
                            conexion.open('POST','<?php echo base_url()?>Categoria/delete',true);
                            conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                            conexion.send(datosSerializados);
                            accionAJAX("La categoría ha sido borrada correctamente");
                        }
                        else{
                            accionAJAX("La categoría no va a ser borrada o asegúrate de haber seleccionado una");
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
    <h1> Este es el formulario para porder borrar categorías</h1>
    <h4>Para borrar una categoría, rellena el siguiente formulario</h4>
    <form id="formulario">
        <div class="form-group">
            <select class="form-control" id="sel1" name="categoria">
                <option value="nope">---- CATEGORÍA A BORRAR ---- </option>
           <?php foreach($categorias as $categoria):?>
                <option value="<?php echo $categoria->ID?>"><?php echo $categoria->nombre?></option>
           <?php endforeach;?>
            </select>
        </div>
        
        <div class="form-group">
           <button type="button"  id="btnBorrar" class="btn btn-info btn-lg" data-target="#myModal" data-toggle="modal" data-target="#myModal">Borrar Categoria</button> 
           <!-- Inicio modal -->
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
           <!-- Final modal-->
        </div>
    </form>
</div>

