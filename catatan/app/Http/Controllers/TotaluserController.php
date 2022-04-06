<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class TotaluserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

        {
            if (Auth::user()->isadmin != 1) {
                abort(403);
            }

        $data= [
            'title' => 'Total User ',
            'users'=>User::all(),

            // 'route' => route('beranda.create'),
        ];
        return view('admin.User.user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'title'=>'Tambah Siswa',


        ];
        return view('admin.user.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $per_id = Auth::User()->id;
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->tgl = $request->tgl;
        $user->jk = $request->jk;
        $user->telp = $request->telp;
        $user->email = $request->email;
        $user->password = $request->password;


        $user->save();
        return redirect()->route('Total_user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'Title' => 'profile',
            'user' => User::where('id', $id)->first(),
        ];
        return view('admin.perjalanan.profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Profile',
            'method' => 'PUT',
            'route' => route('update_user', $id),
            'user' => User::where('id', $id)->first(),
        ];
        return view('admin.perjalanan.profile', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy =User::where('id', $id);
        $destroy->delete();
        return redirect(route('Total_user'));
    }
}
