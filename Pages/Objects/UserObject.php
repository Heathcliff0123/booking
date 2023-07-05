<?php
class User{
    public $id;
    public $Username;
    public $Fullname;
    public $password;
    public $email;

    function __construct($id,$username, $fullname, $password, $email) {
        $this->id = $id;
        $this->Username = $username;
        $this->Fullname = $fullname;
        $this->password = $password;
        $this->email = $email;
    }

    function getID(){
        return $this->id;
    }

    function getUsername(){
        return $this->Username;
    }

    function getFullName(){
        return $this->Fullname;
    }

    function getPassword(){
        return $this->password;
    }

    function getEmail(){
        return $this->email;
    }
}

?>