<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Agen;
use App\Models\PenjualanPulsa;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PenjualanPulsaController extends Controller
{
    //
    public function index()
    {
        if (\request()->isMethod('POST')) {
            return $this->create();
        }
        $penjualan = PenjualanPulsa::where('user_id', auth()->id())->get();

        return $penjualan;
    }

    public function create()
    {
        $field = \request()->validate(
            [
                'no_hp'   => 'required',
                'nominal' => 'required',
            ]
        );

        Arr::set($field,'user_id', auth()->id());
        $penjualan = new PenjualanPulsa();
        $penjualan->create($field);

        $agen = Agen::where('user_id',auth()->id())->first();
        $sisaSaldo = (int)$agen->saldo;
        $jumlah = $sisaSaldo - (int)$field['nominal'];
        $agen->update([
            'saldo' => $jumlah
        ]);
        return 'berhasil';
    }
}
