<?php
class User{
    public $number, $name, $surname, $instagram, $facebook, 
    $houseType, $areaOfLiving, $city, $discription, $photo;

    public function __construct(array $userData = []) {
        $this->number = $userData['number'];
        $this->name = $userData['name'];
        $this->surname = $userData['surname'];
        $this->instagram = $userData['instagram'];
        $this->facebook = $userData['facebook'];
        
        $this->houseType = $userData['houseType'];
        $this->areaOfLiving = $userData['areaOfLiving'];
        $this->city = $userData['areaOfLand'];
        
        $this->discription = $userData['discription'];

        $this->photo = $userData['photo'];
    }
    public function changeUserData($option, $value) {
        $this->$option = $value;
    }
    
}



?>