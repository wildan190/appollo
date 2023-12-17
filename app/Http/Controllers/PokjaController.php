<?php

// app/Http/Controllers/PokjaController.php

namespace App\Http\Controllers;

use App\Models\Pokja;
use Illuminate\Http\Request;

class PokjaController extends Controller
{
    public function index()
    {
        $pokjas = Pokja::all();
        return view('pokjas.index', compact('pokjas'));
    }

    public function create()
    {
        return view('pokjas.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->validationRules());

        Pokja::create($request->all());

        return redirect()->route('pokjas.index')->with('success', 'Pokja created successfully');
    }

    public function show(Pokja $pokja)
    {
        return view('pokjas.show', compact('pokja'));
    }

    public function edit(Pokja $pokja)
    {
        return view('pokjas.edit', compact('pokja'));
    }

    public function update(Request $request, Pokja $pokja)
    {
        $request->validate($this->validationRules($pokja->id));

        $pokja->update($request->all());

        return redirect()->route('pokjas.index')->with('success', 'Pokja updated successfully');
    }

    public function destroy(Pokja $pokja)
    {
        $pokja->delete();

        return redirect()->route('pokjas.index')->with('success', 'Pokja deleted successfully');
    }

    private function validationRules($id = null)
    {
        return [
            'nama_pokja' => 'required|string',
            'nip' => 'required|string|unique:pokjas,nip,' . $id,
            'jabatan_pokja' => 'required|string',
            'golongan' => 'required|string',
            'telepon' => 'required|string',
            'email' => 'required|email|unique:pokjas,email,' . $id,
        ];
    }
}