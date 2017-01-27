<?php

/**
 * Class Pokemon
 * 
 * Represents a User information.
 * 
 */
class UserModel {

    private $userId;
    private $userName;
    private $userPass;

    public function __construct($userId = NULL, $userName = NULL, $userPass = NULL) {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userPass = $userPass;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getUserPass() {
        return $this->userPass;
    }

    public function setUserPass($userPass) {
        $this->userPass = $userPass;
    }

}
