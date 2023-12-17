<?php

// app/Http/Controllers/KodePokjaController.php

namespace App\Http\Controllers;

use App\Models\KodePokja;
use Illuminate\Http\Request;

class KodePokjaController extends Controller
{
    public function index()
    {
        $kodePokjas = KodePokja::all();
        return view('kode_pokjas.index', compact('kodePokjas'));
    }

    public function create()
    {
        return view('kode_pokjas.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->validationRules());

        KodePokja::create($request->all());

        return redirect()->route('kode_pokjas.index')->with('success', 'Kode Pokja created successfully');
    }

    public function show(KodePokja $kodePokja)
    {
        return view('kode_pokjas.show', compact('kodePokja'));
    }

    public function edit(KodePokja $kodePokja)
    {
        return view('kode_pokjas.edit', compact('kodePokja'));
    }

    public function update(Request $request, KodePokja $kodePokja)
    {
        $request->validate($this->validationRules($kodePokja->kd_pokja));

        $kodePokja->update($request->all());

        return redirect()->route('kode_pokjas.index')->with('success', 'Kode Pokja updated successfully');
    }

    public function destroy(KodePokja $kodePokja)
    {
        $kodePokja->delete();

        return redirect()->route('kode_pokjas.index')->with('success', 'Kode Pokja deleted successfully');
    }

    private function validationRules($id = null)
    {
        return [
            'kd_pokja' => 'required|string|unique:kode_pokjas,kd_pokja,' . $id,
            'keterangan' => 'required|string',
        ];
    }
}