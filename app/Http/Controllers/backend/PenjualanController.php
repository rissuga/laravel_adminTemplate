<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $Penjualan = Penjualan::all();
        return view('admin.crud.penjualan_view', compact('Penjualan'));
    }

    public function PenjualanAdd()
    {

        return view('admin.crud.penjualan_add');
    }

    public function penjualanStore(Request $request)
    {
        // dd($request->all());
        $data = new Penjualan();
        $data->nama_barang = $request->NamaBarang;
        $data->jumlah = $request->JumlahBarang;
        $data->harga = $request->HargaBarang;
        $data->save();
        return redirect()->route('penjualan.view')->with('info', 'Add User Succsess');
    }

    public function penjualanEdit($id)
    {
        //dd('hbh');
        $editPenjualan = Penjualan::find($id);
        return view('admin.crud.penjualan_edit', compact('editPenjualan'));
    }

    public function penjualanUpdate(Request $request, $id)
    {


        // dd($request);
        $data = Penjualan::find($id);
        $data->nama_barang = $request->NamaBarang;
        $data->jumlah = $request->JumlahBarang;
        $data->harga = $request->HargaBarang;
        // $data->email = $request->email;
        // $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('penjualan.view')->with('info', 'Update Data Succsess');
    }

    public function penjualanDelete($id)
    {
        // dd('hbh');
        $editData = Penjualan::find($id);
        $editData->delete();
        return redirect()->route('penjualan.view')->with('info', 'Delete User Succsess');
    }
}
