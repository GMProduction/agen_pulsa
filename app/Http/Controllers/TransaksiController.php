<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TransaksiController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $trans = Transaksi::with(['produk','user'])->get();
        return view('admin.transaksi', ['sidebar' => 'transaksi', 'data' => $trans]);
    }

    public function updateStatus(){
        $trans = Transaksi::with('produk')->find(\request('id'));
        if (\request('status') == 1){
            $agen = Agen::where('user_id','=',$trans->user_id)->first();
            $sisaSaldo = (int)$agen->saldo;
            $jumlah = $sisaSaldo + (int) $trans->produk->nilai;
            $agen->update([
               'saldo' => $jumlah
            ]);
        }
        $trans->update([
            'status' => \request('status')
        ]);

        return 'success';
    }

    // public function cetakLaporan($id)
    // {
    //     $pdf = App::make('dompdf.wrapper');
    //     $pdf->loadHTML('<h1>Test</h1>');
    //     return $pdf->stream();
    // }

    public function cetakLaporan($id)
    {
//        return $this->dataTransaksi();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataTransaksi())->setPaper('f4', 'potrait');

        return $pdf->stream();
    }

    public function dataTransaksi()
    {
        return view('admin/laporanpesanan')->with("");
    }
}
