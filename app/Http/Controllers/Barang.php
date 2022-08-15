<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelsBarang;
use Illuminate\Http\Request;

class Barang extends Controller
{
    public function index()
    {
        $Barang = ModelsBarang::all();
        return view('admin.crud.barang_view', compact('Barang'));
    }
}
