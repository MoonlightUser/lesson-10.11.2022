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
        $files = scandir($dataBase);
        $files = array_diff($files, array('.', '..'));
        $files = array_values($files);
        $data = [];
        foreach($files as $key => $file) {
            $this->getDataFromFile($dataBase . $file);
            array_push($data, $this->getDataFromFile($dataBase . $file));
        }
        print_r($data);
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