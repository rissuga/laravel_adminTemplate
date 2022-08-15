<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\STNK;
use Illuminate\Http\Request;

class UTSController extends Controller
{
    public function index()
    {
        $stnk = STNK::all();
        return view('admin.uts.view', compact('stnk'));
    }

    public function UtsAdd()
    {

        return view('admin.uts.add');
    }

    public function UtsStore(Request $request)
    {
        // dd($request->all());
        $data = new STNK();
        $data->no_plat = $request->matkul;
        $data->pemilik = $request->dosen;
        $data->harga = $request->waktu_belajar;
        $data->save();
        return redirect()->route('uts.view')->with('info', 'Add User Succsess');
    }

    public function UtsEdit($id)
    {
        //dd('hbh');
        $edit = STNK::find($id);
        return view('admin.uts.edit', compact('edit'));
    }

    public function UtsUpdate(Request $request, $id)
    {


        // dd($request);
        $data = STNK::find($id);
        $data->no_plat = $request->no;
        $data->pemilik = $request->pemilik;
        $data->harga = $request->harga;
        // $data->email = $request->email;
        // $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('uts.view')->with('info', 'Update Data Succsess');
    }

    public function UtsDelete($id)
    {
        // dd('hbh');
        $editData = STNK::find($id);
        $editData->delete();
        return redirect()->route('penjualan.view')->with('info', 'Delete User Succsess');
    }
}
