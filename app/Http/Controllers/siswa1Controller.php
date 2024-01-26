<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa1;

class siswa1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa1 = Siswa1::all();
        return view('siswa1.data-siswa2',compact('siswa1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa1 = Siswa1::all();
        return view('siswa1.create-data2',compact('siswa1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa1::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'negara_kota_wilayah' => $request->negara_kota_wilayah,
            'usia' => $request->usia,
            'bahasa' => $request->bahasa,
            'pendidikan' => $request->pendidikan,
            'status' => $request->status,
            'ras_suku_warganegara' => $request->ras_suku_warganegara,
            'penghasilan' => $request->penghasilan,
            'hobi' => $request->hobi,
        ]);
        return redirect('data-siswa2');
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
        $siswa1 = Siswa1::findorfail($id);
        return view('siswa1.edit-siswa2',compact('siswa1'));
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
        $siswa1 = Siswa1::findorfail($id);
        $siswa1->update($request->all());
        return redirect('data-siswa2')->with('toast_success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa1 = Siswa1::findorfail($id);
        $siswa1->delete();
        return redirect('data-siswa2')->with('toast_success', 'data siswa deleted successfully');
    }
}
