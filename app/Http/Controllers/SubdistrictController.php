<?php

namespace App\Http\Controllers;

use App\Models\Subdistrict;
use Illuminate\Http\Request;

class SubdistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard(){
        $data = Subdistrict::all();
        return view('index', compact('data'));
    }
    public function index()
    {
        $data = Subdistrict::all();
        return view('subdistrict.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subdistrict.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required'
            ]);

            Subdistrict::create($data);

            return redirect('/subdistrict')->with('success', 'Berhasil Membuat Kecamatan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Gagal Membuat Kecamatan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subdistrict $subdistrict, $id)
    {
        $data = Subdistrict::where('id', $id)->with('village')->first();
        return view('subdistrict.details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subdistrict $subdistrict, $id)
    {
        $data = Subdistrict::where('id', $id)->first();
        return view('subdistrict.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subdistrict $subdistrict, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required'
            ]);

            Subdistrict::where('id', $id)->update($data);

            return redirect('/subdistrict')->with('success', 'Sukses Mengubah Kecamatan');
        } catch (\Throwable $th) {
            return back()->withInput()->with('fail', 'Gagal Mengubah Data Kecamatan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subdistrict $subdistrict, $id)
    {
        Subdistrict::where('id', $id)->delete();
        return back()->with('success', 'Berhasil Menghapus Kecamatan');
    }
}
