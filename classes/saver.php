<?php
require_once __DIR__ . '/saver.php';
class Saver {
    private $dataDir = __DIR__ . '../storage/';
    private $fileSaver = new FileSaver();
    public $dataBase = [];
    public function saveDataInArray($array) {
        array_push($this->dataBase, $array);
    }
    public function rerenderArray() {
        if(file_exists("dataBase_0.txt")) {
            foreach($this->fileSaver->getAllData($this->dataDir) as $data) {
                array_push($this->dataBase, $this->fileSaver->getDataFromFile($data));
            }
        }
        else {
            $this->dataBase = [];
            echo "No data in dataBase";
        }
    }
}
?>