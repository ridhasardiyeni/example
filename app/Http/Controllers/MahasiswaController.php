<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index',compact('mahasiswas'));
    }


    public function create()
    {
        return view('mahasiswa.create');
    }


    public function store(Request $request)
    {
        Mahasiswa::create([
                'nim' => $request->get('nim'),
                'nama_mahasiswa' => $request->get('nama_mahasiswa'),
                'jk' => $request->get('jk'),
                'alamat' => $request->get('alamat'),
            ]);
        return redirect()->route('mahasiswa.index');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {

        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }


    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->nama_mahasiswa = $request->input('nama_mahasiswa');
        $mahasiswa->jk = $request->input('jk');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa -> update();
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect()->route('mahasiswa.index');
    }

}
