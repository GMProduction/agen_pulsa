<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index(){
        $q = \request('q');
        return Produk::filter($q)->where('is_active',1)->get();
    }

    public function detail($id){
        return Produk::find($id);
    }
}
