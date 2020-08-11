<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk=Produk::all();
        return view('admin.Produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Produk.add_Produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $this->validate($request, [
	    //     'harga' => 'required',
        //     'name' => 'required',
        //     'jumlah'=> 'required|int'
		// ]);

		Produk::create([
			'harga' => $request->harga,
            'name' => $request->nama,
            'jumlah'=>$request->jumlah
		]);

        return redirect()->route('produk.index');

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
        $data=Produk::findOrFail($id);
        return view('admin.Produk.edit_Produk',compact('data'));
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
     
        $data=Produk::findOrFail($id);
        $data->name=$request->nama;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->save();
        return redirect()->route('produk.index');   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Produk::findOrFail($id);
        $data->delete();
        return redirect()->route('produk.index');
    }
}
