<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function listProduct(){
        return view('fitureuser.listdata');
    }
    public function laporan(){
        return view('fitureuser.buatlaporan');
    }
}
