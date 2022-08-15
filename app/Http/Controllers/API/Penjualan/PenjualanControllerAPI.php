<?php

namespace App\Http\Controllers\API\Penjualan;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanControllerAPI extends Controller
{

    public function GetAll()
    {
        $data = DB::table('tb_penjualan')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'id' => 'required',
                'nama_barang' => 'required',
                'jumlah' => 'required',
                'harga' => 'required'

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
                'jumlah' => 'required',
                'harga' => 'required'

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

    public function destroy(Request $request)
    {
        $data = Penjualan::where('id', '=', $request->id)->first();

        if (!empty($data)) {
            $data->delete();
            return response()->json($data, 200);
        } else {
            return response()->json(['eror' => 'data tidak ditemukan'], 404);
        }
    }
}
