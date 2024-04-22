<?php

namespace App\Http\Controllers;

use App\Models\Neighbourhood;
use App\Models\Village;
use Illuminate\Http\Request;

class NeighbourhoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = Village::where('id', $id)->with('neighbourhood')->first();
        return view('neighbourhood.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = Village::where('id', $id)->with('neighbourhood')->first();
        return view('neighbourhood.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required'
            ]);

            Neighbourhood::create([
                'village_id' => $id,
                'name' => $request->name
            ]);

            return redirect("/neighbourhood/{$id}")->with('success', 'Berhasil Menambah Data RW');
        } catch (\Throwable $th) {
            return back()->withInput()->with('failed', 'Gagal Menambah Data RW');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Neighbourhood $neighbourhood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Neighbourhood $neighbourhood, $id)
    {
        $data = Neighbourhood::where('id', $id)->first();
        return view('neighbourhood.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Neighbourhood $neighbourhood, $id)
    {
        try {
            $request->validate([
                'name' => 'required'
            ]);

            Neighbourhood::where('id', $id)->update([
                'name' => $request->name
            ]);

            return redirect("/neighbourhood/{$id}")->with('success', 'Berhasil Mengubah Data RW');
        } catch (\Throwable $th) {
            return back()->withInput()->with('failed', 'Gagal Mengubah Data RW');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Neighbourhood $neighbourhood, $id)
    {
        Neighbourhood::where('id', $id)->delete();
        return back()->with('success', 'Berhasil Menghapus RW');
    }
}
