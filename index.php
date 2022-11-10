<?php
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/saver.php';


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
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="instagram" placeholder="instagram">
        <input type="text" name="facebook" placeholder="facebook">
        <input type="text" name="houseType" placeholder="houseType">
        <input type="text" name="areaOfLiving" placeholder="areaOfLiving">
        <input type="text" name="city" placeholder="city">
        <input type="text" name="discription" placeholder="discription">
        <input type="text" name="linkToPhoto" placeholder="linkToPhoto">
        <input type="submit" value="submit" name="form">
    </form>
</body>
</html>