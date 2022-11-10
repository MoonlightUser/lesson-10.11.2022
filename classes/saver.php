<?php
require_once __DIR__ . '/saver.php';
require_once __DIR__ . '/filesaver.php';
class Saver {
    private $dataDir = __DIR__ . '/../storage/';
    public $dataBase = [];
    public function saveDataInArray($array) {
        array_push($this->dataBase, $array);
    }
    public function rerenderArray() {
        if(file_exists("dataBase_0.txt")) {
            $fileSaver = new FileSaver();
            foreach($fileSaver->getAllData($this->dataDir) as $data) {
                array_push($this->dataBase, $fileSaver->getDataFromFile($data));
            }
        }
        else {
            $this->dataBase = [];
            echo "No data in dataBase";
        }
    }
}
?>