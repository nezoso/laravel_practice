<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id,$name){
        return $id.'___mobile____'.$name;
    }
}
