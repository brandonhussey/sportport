<?php

class User{ //Stores user information
    public $userID;
    public $email;
    public $firstName;
    public $lastName;
    public $dob;
    public $password;
    public $salt;

    public function init_password($password){
        $this->salt = random_bytes(64);
        $this->password = password_hash($password, PASSWORD_BCRYPT, ['salt' => $this->salt]);
    }

    public function __construct($email, $firstName, $lastName, $dob){
        $this->firstName = trim($firstName);
        $this->lastName = trim($lastName);
        $this->email = trim($email);
        $this->dob = trim($dob);
    }
}

function user_db_to_dto($user_db){
    $user_dto = new User($user_db['Email'], $user_db['FirstName'], $user_db['LastName'], $user_db['DateOfBirth']);
    $user_dto->userID = trim($user_db['UserID']);
    $user_dto->password = trim($user_db['PasswordHash']);
    $user_dto->salt = trim($user_db['Salt']);
    return $user_dto;
}