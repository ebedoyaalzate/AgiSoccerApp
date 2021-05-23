#!/usr/bin/php -q
<?php
set_time_limit(30);
$param_error_log = '/tmp/notas.log';
$param_debug_on = 1;
require('phpagi.php');
$agi = new AGI();
$agi->answer();
sleep(1);
$agi->text2wav("Bienvenido");

require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("SELECT nombre, puesto FROM equipos", $link); 

while ($row = mysql_fetch_array($result)){ 
	$agi->text2wav("el $row['nombre'] quedo en el puesto numero $row['puesto']");
	sleep(1);
} 

$agi->text2wav("Gracias por utilizar el sitema de la liga, hasta pronto");
$agi->hangup();
