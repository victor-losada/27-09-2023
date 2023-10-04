<?php

include_once ("classusuarios");

$user = new usuarios("victor","victorlosada2211@gmail.com", "administrador");
$user -> getNombre();

echo "El nombre desde el motodo getNombre() es: ". $nombre
