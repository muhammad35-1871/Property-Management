<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function ShowHome(){

return view ('home');

    }

    function ShowRent(){

        return view ('rent');

    }

    function ShowBuy(){

return view('buy');

    }

    function ShowCreatePost(){

        return view('createpost');

    }

    function ShowSignIn(){

return view('signin');

    }


    
}
