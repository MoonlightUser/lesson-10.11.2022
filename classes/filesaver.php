<?php
class FileSaver {
    public $dataDir = __DIR__ . '/../storage/';
    public function saveDataInFile($data, $id) {
        echo $id . " ";
        $file = fopen($this->dataDir."data". $id .".txt", "a");
        fwrite($file, json_encode($data));
        fclose($file);
    }
    public function getDataFromFile($filePath) {
        $file = fopen($filePath, "r");
        $data = fread($file, filesize($filePath));
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
    public function numberOfFiles() {
        $files = scandir($this->dataDir);
        $count = 0;
        foreach($files as $file) {
            if(strpos($file, "data") !== false) {
                $count++;
            }
        }
        return $count;
    }
}


?>