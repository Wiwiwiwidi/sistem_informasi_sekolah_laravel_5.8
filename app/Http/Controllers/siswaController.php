<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\kelas;
class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::orderBy('created_at', 'DESC')->paginate(20);
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('siswa.create', compact('kelas'));;
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
            'nis'=>'required|numeric',
            'nama_siswa' => 'required',
            'jenkel' => 'required',
            'agama' => 'required',
            'telp' => 'required|numeric',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg',
            'email' => 'required',
            'kelas_id' => 'required',

        ]);

        $siswa = siswa::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('Gambar/', $request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }
        // siswa::create([    
        //     'nis'=>$request->nis,
        //     'nama_siswa'=>$request->nama_siswa,
        //     'jenkel'=>$request->jenkel,
        //     'agama'=>$request->agama,
        //     'telp'=>$request->telp,
        //     'tmp_lahir'=>$request->tmp_lahir,
        //     'tgl_lahir'=>$request->tgl_lahir,
        //     'alamat'=>$request->alamat,
        //     'foto'=>$nama_file,
        // ]);

        return redirect(route('siswa.index'))->with(['success','siswa berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa= siswa::find($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = kelas::all();
        $siswa = siswa::find($id);
        return view('siswa.edit', compact('siswa','kelas'));
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
            'nis'=>'required',
            'nama_siswa' => 'required',
            'jenkel' => 'required',
            'agama' => 'required',
            'telp' => 'required|numeric',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
            'email' => 'required',
            'kelas_id' => 'required',

        ]);

        $siswa= siswa::find($id);
        $siswa->update([               
            'nis'=>$request->nis,
            'nama_siswa'=>$request->nama_siswa,
            'jenkel'=>$request->jenkel,
            'agama'=>$request->agama,
            'telp'=> $request->telp,
            'tmp_lahir'=>$request->tmp_lahir,
            'tgl_lahir'=>$request->tgl_lahir,
            'alamat'=>$request->alamat,
            'foto'=>$request->foto,
            'email'=>$request->email,
            'kelas_id'=>$request->kelas_id,


        ]);
        return redirect(route('siswa.index'))->with(['success','siswa berhasil diperbarui']);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where('id', $id)->delete();
        return redirect(route('siswa.index'))->with(['success','siswa Dihapus!']);
    }
}
