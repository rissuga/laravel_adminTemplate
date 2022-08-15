<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;


class crudController extends Controller
{
    public function index()
    {
        $MyProduk = crud::all();
        return view('admin.crud.view', compact('MyProduk'));
    }
    public function crudAdd()
    {

        return view('admin.crud.create');
    }

    public function crudStore(Request $request)
    {
        // dd($request->all());
        $data = new crud();
        $data->product_type = $request->select;
        $data->produk_name = $request->textName;
        $data->save();
        return redirect()->route('crud.view')->with('info', 'Add User Succsess');
    }

    public function crudEdit($id)
    {
        //dd('hbh');
        $editData = crud::find($id);
        return view('admin.crud.edit', compact('editData'));
    }


    public function crudUpdate(Request $request, $id)
    {


        // dd($request);
        $data = crud::find($id);
        $data->product_type = $request->select;
        $data->produk_name = $request->textName;
        // $data->email = $request->email;
        // $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('crud.view')->with('info', 'Update User Succsess');
    }
}
