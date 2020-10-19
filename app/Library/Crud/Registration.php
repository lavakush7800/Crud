<?php
namespace App\Library\Crud;
use App\Http\Controllers\Crud\RegistrationController;
use App\Model\Registration as Model;

class Registration{
    public static function get($name,$email,$username,$password,$date_of_birth,$mobile,$designation):bool{
        $data=Model::get(['name' => $name, 'email' => $username, 'password' => $password, 'date_of_birth' => $date_of_birth, 'mobile' => $mobile, 'designation' => $designation]);
        if($data){
            return true;
        }else{
            return false;
        }
    }
 
 
}