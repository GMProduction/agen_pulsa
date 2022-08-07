<?php

namespace App\Http\Controllers\API;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TransaksiController extends CustomController
{

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|string
     */
    public function transaksi(){
        if (\request()->isMethod('POST')){
            return $this->create();
        }
        $trans = Transaksi::with('produk')->where('user_id','=',auth()->id())->get();
        return $trans;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function history(){
        $trans = Transaksi::with('produk')->where([['status','!=',0],['user_id','=',auth()->id()]])->get();
        return $trans;
    }

    public function create(){
        $field = \request()->validate([
            'produk_id' => 'required',
            'harga' => 'required',
        ]);
        Arr::set($field,'user_id', auth()->id());

        $tran = new Transaksi();
        $tran->create($field);
        return 'berhasil';
    }

    public function updateBukti($id){
        \request()->validate([
           'bukti' => 'required'
        ]);
        $trans = Transaksi::find($id);
        $image     = $this->generateImageName('bukti');
        $stringImg = '/images/bukti/'.$image;
        $this->uploadImage('bukti', $image, 'imageBukti');

        if ($trans && $trans->bukti_pembayaran){
            if (file_exists('../public'.$trans->bukti_pembayaran)) {
                unlink('../public'.$trans->bukti_pembayaran);
            }
        }
        $trans->update([
            'bukti_pembayaran' => $stringImg
        ]);

        return 'berhasil';
    }
}
