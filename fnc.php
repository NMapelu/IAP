<?php

class fnc{

    var $fname;
    public $username;
    protected $email_address;
    var $yob;
    private $password;

    public function computer_user($fname){
        return $fname;
    }

    public function user_age($fname, $yob){
        $age = date('Y') - $yob;
        return $fname . " is "  . $age;
    }
}

    //(create) object

$obj = new fnc();

print $obj->user_age("Alex", 2004);

?>