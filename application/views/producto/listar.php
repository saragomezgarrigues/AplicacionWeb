<div class="container">
    <h1>Listado de productos</h1>
    <?php //print_r($productos); ?>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Producto</th>
                <th>Precio Producto</th>
                <th>Categoria del Producto</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($productos as $producto):?>
            <tr>
                <td><?php echo $producto->ID?></td>
                <td><?php echo $producto->nombreP?></td>
                <td><?php echo $producto->precio?></td>
                <td><?php echo $producto->nombre?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    
</div>

