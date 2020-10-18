<?php
namespace App\Library\Crud;
use App\Http\Controllers\Crud\RegistrationController;
use Illuminate\Support\Facades\Log;
use App\Model\Registration as Model;

class Registration{
    public static function store(){
        $data= Model::create();
       dd($data);
        
    }
 
 
}