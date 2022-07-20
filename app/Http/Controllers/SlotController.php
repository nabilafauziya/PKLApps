<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Siswa
        $slot = Slot::all();
        return view('slot.index', compact('slot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:slots|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $slot = new Slot();
        $slot->nama = $request->nama;
        $slot->nis = $request->nis;
        $slot->jenis_kelamin = $request->jenis_kelamin;
        $slot->agama = $request->agama;
        $slot->tgl_lahir = $request->tgl_lahir;
        $slot->alamat = $request->alamat;
        $slot->save();
        return redirect()->route('slot.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slot = Slot::findOrFail($id);
        return view('slot.show', compact('slot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slot = Slot::findOrFail($id);
        return view('slot.edit', compact('slot'));
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
        // Validasi
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $slot = Slot::findOrFail($id);
        $slot->nama = $request->nama;
        $slot->nis = $request->nis;
        $slot->jenis_kelamin = $request->jenis_kelamin;
        $slot->agama = $request->agama;
        $slot->tgl_lahir = $request->tgl_lahir;
        $slot->alamat = $request->alamat;
        $slot->save();
        return redirect()->route('slot.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slot = Slot::findOrFail($id);
        $slot->delete();
        return redirect()->route('slot.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
