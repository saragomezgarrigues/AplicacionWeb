<div class="container">
    <h1>Listado de categorias</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($categorias as $categoria):?>
            <tr>
                <td><?php echo $categoria->ID ?></td>
                <td><?php echo $categoria->nombre?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

