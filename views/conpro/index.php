
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="StyleSheet" href="public/css/default.css">
</head>
<body>
    <?php require 'views/header.php'; ?>

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
