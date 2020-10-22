<?php

namespace App\Http\Controllers\Crud;

use App\Library\Crud\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }
    public function get(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $username=$request->input('username');
        $password=$request->input('password');
        $date_of_birth=$request->input('date_of_birth');
        $mobile=$request->input('mobile');
        $designation=$request->input('designation');

        $data = Registration::get($name,$email,$username,$password,$date_of_birth,$mobile,$designation);
       
    }
    ///////////////
    public function store(){
        ////code
    }
}
