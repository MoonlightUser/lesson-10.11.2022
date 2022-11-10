<?php
class User{
    public $number, $name, $surname, $instagram, $facebook, 
    $houseType, $areaOfLiving, $city, $discription, $linkToPhoto;
    public $id;
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

        $this->linkToPhoto = $userData['linkToPhoto'];
    }
    public function changeUserData($option, $value) {
        $this->$option = $value;
    }
    public function getAllUserData() {
        return [
            'number' => $this->number,
            'name' => $this->name,
            'surname' => $this->surname,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
            
            'houseType' => $this->houseType,
            'areaOfLiving' => $this->areaOfLiving,
            'city' => $this->city,
            
            'discription' => $this->discription,
            'photo' => $this->linkToPhoto
        ];
    }
    public function getUserData() {
        return [
            'number' => $this->number,
            'name' => $this->name,
            'surname' => $this->surname,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
        ];
    }
    public function getHouseData() {
        return [
            'houseType' => $this->houseType,
            'areaOfLiving' => $this->areaOfLiving,
            'city' => $this->city,
        ];
    }
    public function getDiscription() {
        return $this->discription;
    }
    public function getPhoto() {
        return $this->linkToPhoto;
    }
}



?>