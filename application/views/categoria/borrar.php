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
                <td><a href="#"><img src="<?php echo base_url()?>lib/images/delete.png" id="<?php echo $categoria->ID?>" style="width:23px"/></a>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

