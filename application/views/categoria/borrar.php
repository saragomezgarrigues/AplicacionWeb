<script>
   $(document).on("click", "a.enlace", function(){
    bootbox.confirm({
    title: "¿Estás seguro?",
    message: "¿Estás seguro de borrar la categoría?",
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
        if(result){
         console.log("Se borra la categoria");   
        }
        else{
           console.log("No se borra la categoria");
        }
    }
});
    
    
});
</script>
<div class="container">
    <h1>Listado de categorias</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($categorias as $categoria):?>
            <tr>
                <td><?php echo $categoria->ID ?></td>
                <td><?php echo $categoria->nombre?></td>
                <td><a class="enlace" href="#"><img src="<?php echo base_url()?>lib/images/delete.png" id="<?php echo $categoria->ID?>" style="width:23px"/></a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

