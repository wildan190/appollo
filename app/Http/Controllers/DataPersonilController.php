<?php

// app/Http/Controllers/DataPersonilController.php

namespace App\Http\Controllers;

use App\Models\DataPersonil;
use App\Models\DataTender;
use App\Models\KodePokja;
use App\Models\Pokja;
use Illuminate\Http\Request;

class DataPersonilController extends Controller
{
    public function index()
    {
        $dataPersonils = DataPersonil::all();
        return view('data_personils.index', compact('dataPersonils'));
    }

    public function create()
    {
        $dataTenders = DataTender::all();
        return view('data_personils.create', compact('dataTenders'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validationRules());

        DataPersonil::create($request->all());

        return redirect()->route('data_personils.index')->with('success', 'Data Personil created successfully');
    }

    public function show(DataPersonil $dataPersonil)
    {
        return view('data_personils.show', compact('dataPersonil'));
    }

    public function edit(DataPersonil $dataPersonil)
    {
        return view('data_personils.edit', compact('dataPersonil'));
    }

    public function update(Request $request, DataPersonil $dataPersonil)
    {
        $request->validate($this->validationRules($dataPersonil->id));

        $dataPersonil->update($request->all());

        return redirect()->route('data_personils.index')->with('success', 'Data Personil updated successfully');
    }

    public function destroy(DataPersonil $dataPersonil)
    {
        $dataPersonil->delete();

        return redirect()->route('data_personils.index')->with('success', 'Data Personil deleted successfully');
    }

    private function validationRules($id = null)
    {
        return [
            'nama_personil1' => 'required|string',
            'jabatan1' => 'required|string',
            'nik1' => 'required|string',
            'npwp1' => 'required|string',
            'kd_tender' => 'required|string',
            'nama_paket' => 'required|string',
            'kd_pokja' => 'required|string',
            'pagu' => 'required|numeric',
            'hps' => 'required|numeric',
            'satuan_kerja' => 'required|string',
            'ppk' => 'required|string',
            'nama_instansi' => 'required|string',
            'nilai_penawaran' => 'required|numeric',
            'tanggal_penetapan' => 'required|date',
            'nilai_kontrak' => 'required|numeric',
            'tanggal_kontrak' => 'required|date',
            'waktu_pelaksanaan' => 'required|string',
            'tahun' => 'required|string',
        ];
    }
}