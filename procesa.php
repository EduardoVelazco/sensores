<?php
$valor_estado=$_POST['valor_estado'];
switch($valor_estado){
	case 1:
		exec('sudo python /var/www/html/controlSencillo/py/sensorFrontal.py');
		break;
	case 2:
		exec('sudo python /var/www/html/controlSencillo/py/sensorIzq.py');
		break;
	case 3:
		exc('sudo python /var/www/html/controlSencillo/py/sensorDerecho.py');
} ?>
