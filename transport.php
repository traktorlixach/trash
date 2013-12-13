<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 12.12.13
 * Time: 23:03
 */


include("classes/class.vehicle.php");

$vehicle = new Vehicle('car');
echo $vehicle->type;
echo '<br />';
echo $vehicle->body->color;




?>