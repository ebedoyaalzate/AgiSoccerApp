#!/usr/bin/php -q
<?php
set_time_limit(30);
$param_error_log = '/tmp/notas.log';
$param_debug_on = 1;
require('phpagi.php');
$agi = new AGI();
$agi->answer();
sleep(1);
$agi->exec_agi("googletts.agi,\"Bienvenido\",es");

require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("SELECT nombre, puesto FROM equipos", $link); 

$name = $result

while ($row = mysql_fetch_array($result)){ 
	$name = $row['nombre'];
	$position = $row['puesto'];
	$agi->text2wav("googletts.agi,\"el $name quedo en el puesto numero $position"\",es");
	sleep(1);
} 

$agi->exec_agi("googletts.agi,\"Gracias por utilizar el sitema de la liga\",es");

sleep(1);
$agi->exec_agi("googletts.agi,\"Hasta pronto\",es");

$agi->hangup();