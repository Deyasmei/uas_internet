<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = buku::orderBy('id','desc')->paginate();
        return view ('buku.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required|numeric|unique:buku,id',
            'judul'=>'required',
            'penulis'=>'required',
            'tahun'=>'required|numeric',
            'isbn'=>'required',
        ],[
            'id.required'=>'ID Harus Diisi',
            'id.unique'=>'ID Buku Telah Terdaftar',
            'judul.required'=>'Judul Harus Diisi',
            'penulis.required'=>'PenulisHarus Diisi',
            'tahun.required'=>'Tahun Harus Diisi',
            'isbn.required'=>'ISBN Harus Diisi',
        ]);
        $data = [
            'id'=>$request->id,
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
            'isbn'=>$request->isbn
        ];
        buku::create($data);
        return redirect()->to('buku')->with('success','Berhasil Menambahkan Data');
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
        $data = buku::where('id',$id)->first();
        return view('buku.edit')->with('data',$data);
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
        $request->validate([
            'judul'=>'required',
            'penulis'=>'required',
            'tahun'=>'required|numeric',
            'isbn'=>'required',
        ],[
            'judul.required'=>'Judul Harus Diisi',
            'penulis.required'=>'PenulisHarus Diisi',
            'tahun.required'=>'Tahun Harus Diisi',
            'isbn.required'=>'ISBN Harus Diisi',
        ]);
        $data = [
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
            'isbn'=>$request->isbn
        ];
        buku::where('id',$id)->update($data);
        return redirect()->to('buku')->with('success','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        buku::where('id',$id)->delete();
        return redirect()->to('buku')->with('success','Data Berhasil Di Hapus');
    }
}
