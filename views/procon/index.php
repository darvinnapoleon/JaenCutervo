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
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>catcon" class="menu_link menu_link_select" >Categoria</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>alucon" class="menu_link">Alumno</a></li>
                </ul>
                <div class="social-icon">
                    <a href="<?php echo constant('URL'); ?>clises" class="social-icon_link"><span class="icon-user"></span></a>                    
                    <a href="" class="social-icon_link"><span class="icon-basket"></span></a>
                </div>
            </div>
        </nav>
        <div id="main">
            <section class="group today-special">
                <h2 class="group_title">Realiza tus compras rapido y seguro</h2>
                <div class="container container_flex">
                    <?php
                    include_once 'models/product.php';
                    foreach ($this->producto as $row) {
                        $producto = new Product();
                        $producto = $row;
                        ?>
                        <div class="column column_50-25">
                            <a href="<?php echo constant('URL') . 'procon/verPro/' . $producto->idpro; ?>"><img src="data:image;base64,<?php echo $producto->fotpro; ?>" alt="" class="today-special_img"></a>
                            <div class="today-special_title"><?php echo $producto->nompro; ?></div>
                            <div class="today-special_price"><?php echo 's/.' . $producto->preven; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
        <?php require 'views/footer.php'; ?>
    </body>
</html>
