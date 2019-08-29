<?php

/* los mejores comentarios:
  los controllers heredan o extends de la lib controller
  la lib controller es una instancia de la lib view
  la lib view require todas las views.
 */
?>
<?php
require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'libs/view.php';
require_once 'libs/app.php';
require_once 'config/config.php';
$app = new app;
?>
        
