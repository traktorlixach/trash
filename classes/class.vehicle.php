<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 13.12.13
 * Time: 20:21
 */


/* Класс транспортного средства. Тут же создаются дочерние объекты */
class Vehicle {
    var $type,
        $name,
        $title,
        $body;

    public function __construct($type, $name = null, $title = null) {
        $this->type = $type;
        $this->name = $name;
        $this->title = $title;

        $this->body = new Body('white');
    }
}


class Body {
    var $dimensions,
        $materials,
        $number_of_seats,
        $capacity,
        $carrying,
        $color;

    public function __construct($color = null) {
        $this->color = $color;
    }
}


?>