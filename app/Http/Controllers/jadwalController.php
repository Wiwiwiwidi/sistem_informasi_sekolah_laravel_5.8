<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use App\mapel;
use App\kelas;
use App\guru;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal =jadwal::orderBy('created_at', 'DESC')->paginate(20);
        return view ('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        $mapel = mapel::all();
        $guru = guru::all();
        return view('jadwal.create', compact('mapel','kelas','guru'));
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
            'hari'=>'required',
            'dari_jam'=>'required',
            'sampai_jam'=>'required',
            'ruang'=>'required',
            'mapel_id'=>'required',
            'kelas_id'=>'required',
            'guru_id'=>'required',

        ]);

        jadwal::create([    
            'hari'=>$request->hari,
            'dari_jam'=>$request->dari_jam,
            'sampai_jam'=>$request->sampai_jam,
            'ruang'=>$request->ruang,
            'mapel_id'=>$request->mapel_id,
            'kelas_id'=>$request->kelas_id,
            'guru_id'=>$request->guru_id,

        ]);

        return redirect(route('jadwal.index'))->with(['success','jadwal berhasil ditambah']);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal= jadwal::find($id);
        return view('jadwal.show', compact('jadwal'));
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
        $mapel = mapel::all();
        $kelas = kelas::all();
        $jadwal = jadwal::find($id);
        return view('jadwal.edit', compact('jadwal','mapel','kelas','guru'));
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
            'hari'=>'required',
            'dari_jam'=>'required',
            'sampai_jam'=>'required',
            'ruang'=>'required',
            'mapel_id'=>'required',
            'kelas_id'=>'required',
            'guru_id'=>'required',

        ]);

        $jadwal= jadwal::find($id);
        $jadwal->update([           
            'hari'=>$request->hari,
            'dari_jam'=>$request->dari_jam,
            'sampai_jam'=>$request->sampai_jam,
            'ruang'=>$request->ruang,
            'mapel_id'=>$request->mapel_id,
            'kelas_id'=>$request->kelas_id,
            'guru_id'=>$request->guru_id,

        ]);

        return redirect(route('jadwal.index'))->with(['success','jadwal berhasil ditambah']);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwal::where('id', $id)->delete();
        return redirect(route('jadwal.index'))->with(['success','jadwal Dihapus!']);
    }
}
