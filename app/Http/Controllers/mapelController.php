<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mapel;
class mapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel =mapel::orderBy('created_at', 'DESC')->paginate(20);
        return view ('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.create');
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
            'nama_mapel'=>'required',
        ]);

        mapel::create([    
            'nama_mapel'=>$request->nama_mapel,
        ]);

        return redirect(route('mapel.index'))->with(['success','mapel berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mapel= mapel::find($id);
        return view('mapel.show', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = mapel::find($id);
        return view('mapel.edit', compact('mapel'));
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
            'nama_mapel'=>'required',
        ]);

        $mapel= mapel::find($id);
        $mapel->update([         
            'nama_mapel'=>$request->nama_mapel,
        ]);

        return redirect(route('mapel.index'))->with(['success','mapel berhasil ditambah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mapel::where('id', $id)->delete();
        return redirect(route('mapel.index'))->with(['success','mapel Dihapus!']);
    }
}
