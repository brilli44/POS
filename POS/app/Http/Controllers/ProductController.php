<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   
public function index()
{
    return view('products');
}

public function FoodBeverage()
{
    return view('FoodBeverage');
}

public function BeautyHealth()
{
    return view('beauty-health');
}

public function HomeCare()
{
    return view('home-care');
}

public function BabyKid()
{
    return view('baby-kid');
}

}
