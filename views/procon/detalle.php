<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, 
              initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/fontello.css">
    </head>
    <body>
        <header class="main-header">
            <div class="container container_flex">
                <div class="logo-container column column--50"><h1 class="logo">Golosinas Anita</h1></div>
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
        <main class="main">
            <section class="group main-about-description">
                <div class="container container_flex">
                    <div class="column column--50">
                        <img src="data:image;base64,<?php echo $this->producto->fotpro; ?>">
                    </div>
                    <div class="column column--50">
                        <form action="controlped.do" method="POST">
                            <h3 class="colum-title"><?php echo $this->producto->nompro; ?> </h3>
                            <div class="column--50-space">Precio: <span class="today-special_price"></span></div>
                            <input type="hidden" value="" name="txtidpro"/>
                            <div class="column--50-space">
                                Cantidad: <select name="txtcanpro" id="" class="column--50-list">
                                    <?php for ($i = 1; $i < 6; $i++) {?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>     
                                    <?php }?>
                                </select> 
                            </div>
                            <div class="column--50-space">
                                <input type="submit" value="Agregar al carrito" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
       
        <?php require 'views/footer.php'; ?>

    </body>
</html>
