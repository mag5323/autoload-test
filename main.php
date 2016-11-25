<?php
spl_autoload_register();

use food\breakfast as bk;

$pbj = new bk\pbj();
$pbj->toast();

$burrito = new bk\burrito();
$burrito->eww();
?>
