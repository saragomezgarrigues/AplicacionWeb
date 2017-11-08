<div class="container">
    <fieldset class="col-md-6">    	
        <legend>Datos del producto seleccionado ☆</legend>
            <div class="panel panel-default">
		<div class="panel-body">
                    <form name="formulario">
                        <?php foreach($productos as $producto):?>
                            <div class="form-group">
                                <label for="id" class="col-sm-2 control-label">ID del producto: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" value="<?php echo $producto->ID?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-sm-2 control-label">Nombre: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre" value="<?php echo $producto->nombreP?>">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label for="precio" class="col-sm-2 control-label">Precio: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre" value="<?php echo $producto->precio?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id" class="col-sm-2 control-label">Categoría(ID): </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" value="<?php echo $producto->ID?>" disabled>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </form>
		</div>
            </div> 
    </fieldset>		  
</div>