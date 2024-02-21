<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $ProductData = array(
            "Title"=> "Jujutsu Kaisen","Attack on Titan", "Your lie in April",
            "Classroom of the Elite", "Solo Leveling", "Demon Slayer", "Sword Art Online"
        );
        
        return view('Product',['ProductData' => $ProductData]);
    }

}
