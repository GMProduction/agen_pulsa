<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProdukController extends CustomController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|string
     */
    public function index()
    {
        if (\request()->isMethod('POST')){
            return $this->create();
        }

        $produk = Produk::all();
        return view('admin.produk', ['sidebar' => 'produk', 'data' => $produk]);
    }

    /**
     * @return string
     */
    public function create()
    {
        //
        $field = \request()->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'nilai' => 'required'
        ]);

        if (\request('gambar')){
            $image     = $this->generateImageName('gambar');
            $stringImg = '/images/produk/'.$image;
            $this->uploadImage('gambar', $image, 'imageProduk');
            Arr::set($field, 'gambar', $stringImg);
        }

        if (\request('id')){
            $produk = Produk::find(\request('id'));
            if (\request('gambar')){
                if ($produk && $produk->gambar){
                    if (file_exists('../public'.$produk->gambar)) {
                        unlink('../public'.$produk->gambar);
                    }
                }
            }
            $produk->update($field);
        }else{
            $produk = new Produk();
            $produk->create($field);
        }

        return 'success';
    }

    public function setStatus(){
        $product = Produk::find(\request('id'));
        $status = \request('isActive');
        $isActive = 1;
        if ($status == 1){
            $isActive = 0;
        }
        $product->update([
            'is_active' => $isActive
        ]);

        return 'success';
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
