<?php

// app/Http/Controllers/DataTenderController.php

namespace App\Http\Controllers;

use App\Models\DataTender;
use App\Models\KodePokja;
use Illuminate\Http\Request;

class DataTenderController extends Controller
{
    public function index()
    {
        $dataTenders = DataTender::all();
        return view('data_tenders.index', compact('dataTenders'));
    }

    public function create()
    {
        $kodePokjas = KodePokja::all(); // Mengambil semua data Kode Pokja

        return view('data_tenders.create', compact('kodePokjas'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validationRules());

        DataTender::create($request->all());

        return redirect()->route('data_tenders.index')->with('success', 'Data Tender created successfully');
    }

    public function show(DataTender $dataTender)
    {
        return view('data_tenders.show', compact('dataTender'));
    }

    public function edit($id)
    {
        $dataTender = DataTender::findOrFail($id);
        $kodePokjas = KodePokja::all(); // Mengambil semua data Kode Pokja

        return view('data_tenders.edit', compact('dataTender', 'kodePokjas'));
    }

    public function update(Request $request, DataTender $dataTender)
    {
        $request->validate($this->validationRules($dataTender->id));

        $dataTender->update($request->all());

        return redirect()->route('data_tenders.index')->with('success', 'Data Tender updated successfully');
    }

    public function destroy(DataTender $dataTender)
    {
        $dataTender->delete();

        return redirect()->route('data_tenders.index')->with('success', 'Data Tender deleted successfully');
    }

    private function validationRules($id = null)
    {
        return [
            'nama_personil' => 'required|string',
            'jabatan' => 'required|string',
            'nik' => 'required|string',
            'npwp' => 'required|string',
            'kd_tender' => 'required|string|unique:data_tenders,kd_tender,' . $id,
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
