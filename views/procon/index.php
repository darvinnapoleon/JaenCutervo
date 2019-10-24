
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0,
          maximum-scale=3.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/fontello.css">
</head>
<body>
    <header class="main-header">
            <div class="container container_flex">
                <div class="logo-container column column--50">
                    <h1 class="logo">Golosinas Anita</h1>
                </div>
            </div>
        </header>

        <nav class="main-nav">
            <div class="container container_flex">
                <span class="icon-menu" id="btnmenu"></span>
                <ul class="menu" id="menu">
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>main" class="menu_link" >Inicio</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>catcon" class="menu_link" >Categoria</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>procon" class="menu_link menu_link_select">Producto</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>alucon" class="menu_link">Alumno</a></li>
                </ul>
                <div class="social-icon">
                    <a href="<?php echo constant('URL'); ?>clises" class="social-icon_link"><span class="icon-user"></span></a>                    
                    <a href="" class="social-icon_link"><span class="icon-basket"></span></a>
                </div>
            </div>
        </nav>

    <div id="main">
        <h1 class="center">Sección de Consulta</h1>
      
        <div id="respuesta" class="center"></div>

        <table width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Producto</th>
                    <th>Precio Compra</th>
                    
                </tr>
            </thead>
            <tbody id="tbody-producto">
                <?php
                include_once 'models/product.php';
                    foreach($this->producto as $row){
                        $product = new Product();
                        $product = $row; 
                    
                ?>
                <tr id="fila-<?php echo $product->idpro;?>">
                    <td><?php echo $product->idpro; ?></td>
                    <td><?php echo $product->nompro; ?></td>
                    <td><?php echo $product->precom; ?></td>
                    <!--<td><a href="<?php //echo constant('URL') . 'conpro/veProducto/' . $producto->idpro;?>">Editar</a>  </td>
                     <td><button class="bEliminar" data-idpro="<?php //echo $producto->idpro; ?>">Eliminar</button></td>
                    <!--<td><a href="">Eliminar</a> </td> -->
                </tr>

                <?php } ?>
            </tbody>
        </table>
        
    </div>

    <?php require 'views/footer.php'; ?>
    <!--<script src="<?php //echo constant('URL'); ?>public/js/main.js"></script>-->
</body>
</html>
