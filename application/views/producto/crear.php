<script>
$(document).ready(function(){
   // var nameRegex=/^[A-Z][a-z][0-9] $/;
   // var precioRegex=/^[0-9]{1,4},[0-9]{2}$/;
    
    $('#btnCrear').on('click',function(){
        alert("Se ha pulsado el boton de crear. A validar los datos!! :D");
    });
});    
</script>
<div class="container">
    <h1>Bienvenido al formulario de creación de Productos! :)</h1>
    <h4>Para poder crear un producto, rellena los campos del formulario</h4>
    <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre del producto: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre">
    </div>
  </div>
   <div class="form-group">
    <label for="precio" class="col-sm-2 control-label">Precio: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="precio">
    </div>
  </div>
   <div class="form-group">
    <label for="categoria" class="col-sm-2 control-label">Categoría: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="categoria">
    </div>
  </div>     
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" id="btnCrear" class="btn btn-default">Crear producto!</button>
    </div>
  </div>
</form>
</div>


