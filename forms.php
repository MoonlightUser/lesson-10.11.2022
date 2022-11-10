<?php
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/saver.php';
require_once __DIR__ . '/classes/filesaver.php';


if (isset($_POST["form"])){
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
    $saver = new Saver();
    $fileSaver = new FileSaver();
    $user->id = $fileSaver->numberOfFiles();
    $fileSaver->saveDataInFile($user, $user->id);
    $saver->rerenderArray();
    $saver->saveDataInArray($user);
}

?>