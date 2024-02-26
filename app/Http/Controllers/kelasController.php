<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\guru;
class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas =kelas::orderBy('created_at', 'DESC')->paginate(20);
        return view ('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $guru  = guru::all();
        // $kelas = kelas::all();
        return view('kelas.create', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kelas'=>'required',
            'tingkat_kelas'=>'required',
            'jumlah_siswa'=>'required',
            'jurusan'=>'required',
            'guru_id'=>'required',

        ]);

        kelas::create([    
            'nama_kelas'=>$request->nama_kelas,
            'tingkat_kelas'=>$request->tingkat_kelas,
            'jumlah_siswa'=>$request->jumlah_siswa,
            'jurusan'=>$request->jurusan,
            'guru_id'=>$request->guru_id,
        ]);

        return redirect(route('kelas.index'))->with(['success','kelas berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas= kelas::find($id);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::all();
        $kelas = kelas::find($id);
        return view('kelas.edit', compact('kelas','guru'));
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
        $this->validate($request, [
            'nama_kelas'=>'required',
            'tingkat_kelas'=>'required',
            'jumlah_siswa'=>'required',
            'jurusan'=>'required',
            'guru_id'=>'required',

        ]);

        $kelas= kelas::find($id);
        $kelas->update([           
            'nama_kelas'=>$request->nama_kelas,
            'tingkat_kelas'=>$request->tingkat_kelas,
            'jumlah_siswa'=>$request->jumlah_siswa,
            'jurusan'=>$request->jurusan,
            'guru_id'=>$request->guru_id,

        ]);

        return redirect(route('kelas.index'))->with(['success','kelas berhasil ditambah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kelas::where('id', $id)->delete();
        return redirect(route('kelas.index'))->with(['success','kelas Dihapus!']);
    }
}
