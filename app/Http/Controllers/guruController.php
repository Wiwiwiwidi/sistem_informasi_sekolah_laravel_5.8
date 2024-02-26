<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru =guru::orderBy('created_at', 'DESC')->paginate(20);
        return view ('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'nip'=>'required',
            'nama_guru' => 'required',
            'jenkel' => 'required',
            'telp' => 'required|numeric',
            'alamat' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png',
            'email' => 'required',

        ]);

        $guru = guru::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('Gambar/', $request->file('foto')->getClientOriginalName());
            $guru->foto = $request->file('foto')->getClientOriginalName();
            $guru->save();
        }

        // guru::create([    
        //     'nip'=>$request->nip,
        //     'nama_guru'=>$request->nama_guru,
        //     'jenkel'=>$request->jenkel,
        //     'telp'=> $request->telp,
        //     'alamat'=>$request->alamat,
        //     'foto'=>$request->foto,
            // 'email'=>$request->email,

        // ]);

        return redirect(route('guru.index'))->with(['success','guru berhasil ditambah']);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru= guru::find($id);
        return view('guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::find($id);
        return view('guru.edit', compact('guru'));
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
            'nip'=>'required',
            'nama_guru' => 'required',
            'jenkel' => 'required',
            'telp' => 'required|numeric',
            'alamat' => 'required',
            'foto' => 'required',
            'email' => 'required',
        ]);

        $guru= guru::find($id);
        $guru->update([   
            'nip'=>$request->nip,
            'nama_guru'=>$request->nama_guru,
            'jenkel'=>$request->jenkel,
            'telp'=> $request->telp,
            'alamat'=>$request->alamat,
            'foto'=>$request->foto,
            'email'=>$request->email,
        ]);
        return redirect(route('guru.index'))->with(['success','guru berhasil ditambah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        guru::where('id', $id)->delete();
        return redirect(route('guru.index'))->with(['success','guru Dihapus!']);    }
}
