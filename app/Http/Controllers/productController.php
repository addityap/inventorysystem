<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function listProduct(){
        $product= Product::get();
        $kategori= Kategori::get();
        return view('fitureuser.listdata', compact('kategori','product'));
    }
    public function laporan(){
        return view('fitureuser.buatlaporan');
    }
}
