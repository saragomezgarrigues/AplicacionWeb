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
                <td> <td><a class="enlace" href="#"><img src="<?php echo base_url()?>lib/images/delete.png" id="<?php echo $producto->ID?>" style="width:23px"/></a></td></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    
</div>
