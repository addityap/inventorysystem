<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listProduct()
    {
        $product = Product::get();
        $kategori = Kategori::get();
        return view('fitureuser.listdata', compact('kategori', 'product'));
    }
    public function laporan()
    {
        return view('fitureuser.buatlaporan');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product;
        $data->kodeproduct = Str::random(5);
        $data->namaproduct = $request->namaproduct;
        $data->kategoriproduct = $request->catproduct;
        $data->quantityproduct = $request->qproduct;
        $data->status_id = '1';
        $data->save();

        session()->flash('success', 'This Product has been added to the list');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
