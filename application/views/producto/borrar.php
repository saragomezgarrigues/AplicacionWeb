<script>
     $(document).on("click", "a.enlace", function(){
     var id =this.id;
    console.log("ID del producto: " + id);
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
        if(result){
         console.log("Se borra el producto");
          var formulario = document.getElementById("formulario");
            var datosSerializados = serialize(formulario);
            conexion=new XMLHttpRequest();
            conexion.open('POST','<?php echo base_url()?>Producto/delete',true);
            conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            conexion.send(datosSerializados);
         setCookie("Producto",id,1);
        }
        else{
           console.log("No se borra el producto");
        }
    }
});

});
 function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


</script>

<div class="container">
    <h1>Listado de productos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Producto</th>
                <th>Precio Producto</th>
                <th>Categoria del Producto</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($productos as $producto):?>
            <tr>
                <td><?php echo $producto->ID?></td>
                <td><?php echo $producto->nombreP?></td>
                <td><?php echo $producto->precio?></td>
                <td><?php echo $producto->nombre?></td>
                <td>
                    <form id="formulario">
                    <a class="enlace" href="#" id="<?php echo $producto->ID?>"><img src="<?php echo base_url()?>lib/images/delete.png" 
                      id="<?php echo $producto->ID?>" style="width:23px"/></a>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    
</div>
