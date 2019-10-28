
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
                <div class="logo-container column column--50">
                    <h1 class="logo">Golosinas Anita</h1>
                </div>
            </div>
        </header>

        <nav class="main-nav">
            <div class="container container_flex">
                <span class="icon-menu" id="btnmenu"></span>
                <ul class="menu" id="menu">
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>main" class="menu_link menu_link_select" >Inicio</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>catcon" class="menu_link" >Categoria</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>alucon" class="menu_link">Alumno</a></li>
                </ul>
                <div class="social-icon">
                    <a href="<?php echo constant('URL'); ?>clises" class="social-icon_link"><span class="icon-user"></span></a>
                    <a href="" class="social-icon_link"><span class="icon-basket"></span></a>
                </div>
            </div>
        </nav>
        <section class="banner">
		<img src="<?php echo constant('URL'); ?>public/img/banner.webp" alt="" class="banner_img">
		<div class="banner_content">Disfruta de dulcura hoy mismo</div>
	</section>

	<main class="main">
		<section class="group group-color">
			<div class="container">
				<h2 class="main_title">Bienvenido a Golosinas Anita</h2>
				<p class="main_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus natus minus sapiente recusandae repudiandae, dolore exercitationem ea ex corporis numquam, mollitia sint illum labore qui, rerum omnis ab dicta quas!</p>
			</div>
		</section>
		<section class="group today-special">
			<h2 class="group_title">Las mejores ofertas</h2>
			<div class="container container_flex">
				<div class="column column_50-25">
					<img src="<?php echo constant('URL'); ?>public/img/sub.jpg" alt="" class="today-special_img">
					<div class="today-special_title">Especial del dia 1</div>
					<div class="today-special_price">s/99</div>
				</div>
				<div class="column column_50-25">
					<img src="<?php echo constant('URL'); ?>public/img/cas.png" alt="" class="today-special_img">
					<div class="today-special_title">Especial del dia 2</div>
					<div class="today-special_price">s/99</div>
				</div>
				<div class="column column_50-25">
					<img src="<?php echo constant('URL'); ?>public/img/lay.jpg" alt="" class="today-special_img">
					<div class="today-special_title">Especial del dia 3</div>
					<div class="today-special_price">s/99</div>
				</div>
				<div class="column column_50-25">
					<img src="<?php echo constant('URL'); ?>public/img/cop.jpg" alt="" class="today-special_img">
					<div class="today-special_title">Especial del dia 4</div>
					<div class="today-special_price">s/99</div>
				</div>
			</div>
		</section>
	</main>
        <?php require 'views/footer.php'; ?>
        
    </body>
</html>
