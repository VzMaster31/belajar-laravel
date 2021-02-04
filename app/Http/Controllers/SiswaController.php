<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = DB::table('siswa')->get();
        return view('tampildata', compact('datasiswa'));
        // Diuganakan untuk menampilkan view data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('isidata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //mass assignment
        // Siswa::create($request->all());

        $message = [
            'required' => 'Pastikan field sudah terisi',
            'digits' => 'Pastikan field angka tersebut 8 karakter'
        ];

        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required|digits:8',
            'alamat' => 'required',
        ], $message);
    


        // Eloquent
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->telepon = $request->telepon;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        return redirect()->back();
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
        $siswa = Siswa::find($id);
        return view('editData', compact('siswa'));
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
        $siswa = Siswa::updateOrcreate(['id' => $id], $request->all());

        return redirect()->route('listData');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        
        return redirect()->route('listData');
    }
}
