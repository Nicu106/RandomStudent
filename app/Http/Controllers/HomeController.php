<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

//     public $inputValue = $_GET['randomNumber'];
    public function getInputNumber(Request $request){

        $inputValue = $request->input('randomNumber');
        return view('shakeNumbers', ['inputValue' => $inputValue] );
    }

    public function redirect(){
        return view('shakeNumbers');
    }

}
