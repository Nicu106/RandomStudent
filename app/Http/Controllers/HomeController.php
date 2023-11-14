<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getInputNumber(Request $request){

        $inputValue = $request->input('randomNumber');

        return $inputValue;
    }

    //with this funtion we are going to pick a student
    public function randomNumber(){
        return rand(0, $this->getInputNumber());
     }

     public function generateHtmlCircles(){
        for($i=0;$i <=$this->getInputNumber();$i++){
           return $i;
        }
     }

}
