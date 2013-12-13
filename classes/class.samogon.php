<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 13.11.13
 * Time: 21:39
 */


class Samogon {
    private $sg = 1;
    private $dr = 0.1;
    private $g = 0.2;
    private $w = 3;

    protected function get_sugar($how_much_moonshine) {
        return 'возьмём '.$this->sg * $how_much_moonshine.' кг. сахара<br />';
    }

    protected function get_barm($how_much_moonshine) {
        return 'возьмём '.$this->dr * $how_much_moonshine.' кг. дрожжей<br />';
    }

    protected function get_pease($how_much_moonshine) {
        return 'возьмём '.$this->g * $how_much_moonshine.' кг. гороха<br />';
    }

    protected function get_water($how_much_moonshine) {
        return 'возьмём '.$this->w * $how_much_moonshine.' л. воды<br />';
    }

    public function __construct() {
        echo '...Выпьем с горя, где же кружка?<br /><br />';
    }

    public function get_samogon($how_much_moonshine) {
        echo '<u>Для '.$how_much_moonshine.' литров самогона:</u><br />';
        echo $this->get_sugar($how_much_moonshine);
        echo $this->get_barm($how_much_moonshine);
        echo $this->get_pease($how_much_moonshine);
        echo $this->get_water($how_much_moonshine);
        echo '<br />Напиток готов.';
    }
}

?>
