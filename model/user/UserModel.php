<?php

/**
 * Class Pokemon
 * 
 * Represents a User information.
 * 
 */
class UserModel {

    private $userId;
    private $username;
    private $userPass;

    public function __construct($userId = NULL, $userName = NULL, $userPass = NULL) {
        $this->userId = $userId;
        $this->username = $userName;
        $this->userPass = $userPass;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($userName) {
        $this->username = $userName;
    }

    public function getUserPass() {
        return $this->userPass;
    }

    public function setUserPass($userPass) {
        $this->userPass = $userPass;
    }

}
