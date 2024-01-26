<?php

namespace App\Http\Controllers;
use App\Models\Beranda;
use Illuminate\Http\Request;

class berandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beranda = Beranda::all();
        return view('beranda.beranda',compact('beranda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beranda = Beranda::all();
        return view('beranda.create-beranda',compact('beranda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Beranda::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'address' => $request->address,
            'alamat' => $request->alamat,
            'Kelas' => $request->Kelas,
            'usia' => $request->usia,
            'pendidikan' => $request->pendidikan,
            'siswa' => $request->siswa,
        ]);
        return redirect('beranda');
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
        $beranda = Beranda::findorfail($id);
        return view('beranda.edit-beranda',compact('beranda'));
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
        $beranda = Beranda::findorfail($id);
        $beranda->update($request->all());
        return redirect('beranda')->with('toast_success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beranda = Beranda::findorfail($id);
        $beranda->delete();
        return redirect('beranda')->with('toast_success', 'data siswa deleted successfully');
    }
}
