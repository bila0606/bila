<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class Siswa2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.data-siswa',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create-data'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Siswa::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'address' => $request->address,
            'alamat' => $request->alamat,
            'Kelas' => $request->Kelas,
            'nama1' => $request->nama1,
            'nama2' => $request->nama2,
            'nama3' => $request->nama3,
            'nama4' => $request->nama4,
        ]);
        return redirect('data-siswa');
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
        $siswa = Siswa::findorfail($id);
        return view('siswa.edit-siswa',compact('siswa'));
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
        $siswa = Siswa::findorfail($id);
        $siswa->update($request->all());
        return redirect('data-siswa')->with('toast_success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findorfail($id);
        $siswa->delete();
        return redirect('data-siswa')->with('toast_success', 'data siswa deleted successfully');
    }
}
