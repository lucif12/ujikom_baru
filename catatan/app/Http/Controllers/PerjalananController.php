<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use Illuminate\Support\Facades\Auth;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(Auth::user()->is_admin = 0){
           abort(403);
       }

       $user_id = Auth()->user()->id;
        return view('admin.Perjalanan.perjalanan',[
            'perjalanans'=>Perjalanan::all()->where('user_id',$user_id)
        ]);
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
        return view('admin.Perjalanan.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->is_admin = 0){
            abort(403);
        }

        $per = new Perjalanan();
        $per->user_id = Auth::user()->id;
        $per->tanggal = $request->tanggal;
        $per->waktu = $request->waktu;
        $per->suhu = $request->suhu;
        $per->lokasi = $request->lokasi;



        $per->save();
        return redirect()->route('perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'route' => route('update-perjalanan', $id),
            'per' => Perjalanan::where('id', $id)->first(),
        ];
        return view('admin.perjalanan.edit', $data);
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
        $per = Perjalanan::find($id);

        $per->tanggal = $request->tanggal;
        $per->tanggal = $request->tanggal;
        $per->waktu = $request->waktu;
        $per->suhu = $request->suhu;
        $per->lokasi = $request->lokasi;
        $per->update();
        return redirect()->route('per-user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy =Perjalanan::where('id', $id);
        $destroy->delete();
        return redirect(route('per-user'));
    }
}
