<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AnakController extends Controller
{
    //
    public function index()
    {
        $data_anak = \App\Models\Anak::all();
        return view('anak.index', ['data_anak' => $data_anak]);
    }

    public function create(Request $request)
    {
        \App\Models\Anak::create($request->all());
        return redirect('/anak')->with('Sukses', 'Data berhasil di input!');
    }

    public function edit($id)
    {
        $data_anak = \App\Models\Anak::find($id);
        return view('anak.edit', ['anak' => $data_anak]);
    }

    public function update(Request $request, $id)
    {
        $data_anak = \App\Models\Anak::find($id);
        $data_anak->update($request->all());
        return redirect('anak')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $data_anak = \App\Models\Anak::find($id);
        $data_anak->delete();
        return redirect('anak')->with('Sukses', 'Data berhasil dihapus');
    }
}
