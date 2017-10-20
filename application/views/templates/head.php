<html>
    <head>
        <meta charset="utf-8">
        <title>Mi aplicación</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>lib/css/custom.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url()?>">Mi aplicación</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Producto/crear">Crear un producto</a></li>
          <li><a href="#">Listar productos</a></li>
          <li><a href="#">Borrar productos</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorías<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Crear una categoría</a></li>
          <li><a href="#">Listar categorías</a></li>
          <li><a href="#">Borrar categorías</a></li>
        </ul>
      </li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>