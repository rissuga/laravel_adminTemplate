<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ViewUser;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home()
    {

        return 'selmat ';
    }
    //
    public function UserView()
    {
        $MyUser = ViewUser::all();
        return view('backend.user.view_user', compact('MyUser'));
    }


    public function Useradd()
    {
        // $MyUser = ViewUser::all();
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request)
    {

        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'textName' => 'required',
        ]);
        // dd($request);
        $data = new User();
        $data->UserType = $request->select;
        $data->name = $request->textName;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('user.view')->with('info', 'Add User Succsess');
    }

    public function UserEdit($id)
    {
        // dd('hbh');
        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id)
    {

        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'textName' => 'required',
        ]);
        // dd($request);
        $data = User::find($id);
        $data->UserType = $request->select;
        $data->name = $request->textName;
        $data->email = $request->email;
        // $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('user.view')->with('info', 'Update User Succsess');
    }


    public function UserDelete($id)
    {
        // dd('hbh');
        $editData = User::find($id);
        $editData->delete();
        return redirect()->route('user.view')->with('info', 'Delete User Succsess');
    }
}
