<?php
class FileSaver {
    public $dataDir = __DIR__ . '../storage/';
    public function saveDataInFile($data) {
        $file = fopen("data". $data->id .".txt", "a");
        fwrite($file, json_encode($data));
        fclose($file);
    }
    public function getDataFromFile($fileName) {
        $file = fopen($fileName, "r");
        $data = fread($file, filesize($fileName));
        fclose($file);
        return json_decode($data);
    }
    public function getAllData($dataBase) {
        $data = [];
        $files = scandir($dataBase);
        foreach($files as $file) {
            if(strpos($file, "data") !== false) {
                array_push($data, $this->getDataFromFile($file));
            }
        }
        return $data;
    }
}


?>