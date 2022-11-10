<?php
class Saver {
    public $dataBase = [];
    public function saveDataInArray($array) {
        array_push($this->dataBase, $array);
    }
}


?>