<?php

namespace App\Http\Controllers\API\Penjualan;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;

use Illuminate\Http\Request;

class PenjualanControllerAPI extends Controller
{

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'id' => 'required',
                'nama_barang' => 'required',
                'jumlah' => 'jumlah',
                'harga' => 'harga'

            ]
        );

        $data = new Penjualan();
        $data->id = $request->id;
        $data->nama_barang = $request->nama_barang;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;
        $data->save();

        return response()->json($data, 201);
    }
    public function update(Request $request)
    {
        $validateData = $request->validate(
            [
                'id' => 'required',
                'nama_barang' => 'required',
                'jumlah' => 'jumlah',
                'harga' => 'harga'

            ]
        );

        $data = Penjualan::where('id', '=', $request->id)->first();
        $data->id = $request->id;
        $data->nama_barang = $request->nama_barang;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;
        $data->save();

        return response()->json($data, 201);
    }
}
