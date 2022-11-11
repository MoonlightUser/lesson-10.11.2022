<?php
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/saver.php';
require_once __DIR__ . '/classes/filesaver.php';
require_once __DIR__ . '/classes/build.php';

if (isset($_POST["form"])){
    if (isset($_POST["name"]) && isset($_POST["surname"])&& isset($_POST["houseType"]) && isset($_POST["areaOfLiving"]) &&
    isset($_POST["city"]) && isset($_POST["discription"]) && isset($_POST["linkToPhoto"])) {
        $user = new User([
            'number' => $_POST['number'],
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'instagram' => $_POST['instagram'],
            'facebook' => $_POST['facebook'],
            
            'houseType' => $_POST['houseType'],
            'areaOfLiving' => $_POST['areaOfLiving'],
            'city' => $_POST['city'],
            
            'discription' => $_POST['discription'],
            'linkToPhoto' => $_POST['linkToPhoto']
        ]);
    
    }
    else {
        echo "Error";
    }
    $saver = new Saver();
    $fileSaver = new FileSaver();
    $builder = new Build();

    $user->id = $fileSaver->numberOfFiles();
    $fileSaver->saveDataInFile($user, $user->id);
    $saver->rerenderArray();
    $saver->saveDataInArray($user);
    $builder->buildFormsPage($fileSaver->getAllData(__DIR__ . '/storage/'));
}

?>