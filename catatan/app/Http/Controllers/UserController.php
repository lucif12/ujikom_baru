<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use App\Models\User;

class UserController extends Controller
{
    public function index4()
    {
        $data= [
            'title' => 'Data Perjalanan',
            'perjalanans'=>Perjalanan::all(),
        ];
        return view('admin.User.perjalanan', $data);
    }

    public function edit_user($id)
    {
        $data = [
            'title' => 'Edit Profile',
            'method' => 'PUT',
            'route' => route('update_user', $id),
            'user' => User::where('id', $id)->first(),
        ];
        return view('admin.perjalanan.profile', $data);
    }

    public function update_user(Request $request, $id)
    {
        $user = User::find($id);
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->tgl = $request->tgl;
        $user->jk = $request->jk;
        $user->telp = $request->telp;
        $user->email = $request->email;

        $user->update();
        return redirect()->route('home');
    }







}
