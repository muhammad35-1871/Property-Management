<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    function OnInsert(Request $request){

$email=$req->input('email');
$pass=$req->input('pass');

$result=DB::insert('INSERT INTO `sign in`(`Email_address`, `Password`) VALUES(?,?)',[$email,$pass]);


if($result==true){

    return "Successs";
}
else{

    return "fail";
}

    }
}
