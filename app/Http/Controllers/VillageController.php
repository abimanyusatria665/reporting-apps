<?php

namespace App\Http\Controllers;

use App\Models\Subdistrict;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = Subdistrict::where('id', $id)->with('village')->first();
        return view('village.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $subdistrict = Subdistrict::where('id', $id)->first();
        return view('village.create', compact('subdistrict'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        try {
            $data = $request->validate([
                // 'subdistrict' => 'required',
                'name' => 'required'
            ]);

            $village = Village::create([
                'subdistrict_id' => $id,
                'name' => $data['name']
            ]);


    return redirect("/village/{$id}")->with('success', 'Berhasil Membuat Data Desa');
        } catch (\Throwable $th) {
            return back()->withInput()->with('fail', 'Gagal Membuat Data Desa');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Village $village, $id)
    {
        $data = Village::where('id', $id)->with('neighbourhood')->first();
        return view('village.details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(Village $village, $id)
    {
        $village = Village::where('id', $id)->first();
        $subdistrict = Subdistrict::where('id', $village->subdistrict_id)->first();
        $data = Subdistrict::all();


        return view('village.update', compact( 'data','subdistrict', 'village'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Village $village, $id)
    {
        try {
            $data = $request->validate([
                'subdistrict' => 'required',
                'name' => 'required'
            ]);

            Village::where('id', $id)->update([
                'subdistrict_id' => $data['subdistrict'],
                'name' => $data['name']
            ]);

            return redirect('/village')->with('success', 'Berhasil Mengubah Data Desa');

        } catch (\Throwable $th) {
            return back()->withInput()->with('fail', 'Gagal Mengubah Data Desa');
        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Village $village, $id)
    {
        Village::where('id', $id)->delete();

        return back()->with('success', 'Berhasil Menghapus Data Desa');

    }
}
