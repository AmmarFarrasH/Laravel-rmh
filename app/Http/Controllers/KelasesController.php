<?php

namespace App\Http\Controllers;

use App\Models\Kelases;
use App\Http\Requests\StoreKelasesRequest;
use App\Http\Requests\UpdateKelasesRequest;

class KelasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelases = Kelases::select('id_kelas', 'nama_kelas', 'kompetisi_keahlian')->get();
        return view('kelases.index', compact('kelases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kelases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasesRequest $request, Kelases $kelases)
    {
        //
        $kelases->create($request->all());
        return redirect()->route('kelases.index')
        ->with(['success' =>'Data '. $request['nama']. 'sudah disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelases $kelase)
    {
        //
        return view('kelases.show', compact('kelase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelases $kelase)
    {
        //
        return view('kelases.edit', compact('kelase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasesRequest $request, Kelases $kelase)
    {
        //
        $kelase->update($request->all());
        return redirect()->route('kelases.index')->with(['success' => 'Data Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelases $kelase)
    {
        //
        $kelase->delete();
        return redirect()->route('kelases.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
