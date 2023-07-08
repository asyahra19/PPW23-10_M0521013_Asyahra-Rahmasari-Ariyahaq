<?php

namespace App\Http\Controllers;

use App\Models\PetBoarding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetBoardingController extends Controller
{
    public function index()
    {
        $pet_boardings = PetBoarding::orderBy('owner_name', 'asc')->get();
        // $pet_boardings = DB :: select('select * from pet_boardings');
        return view('boardings.index', ['pet_boardings' => $pet_boardings]);
    }

    public function create()
    {
        return view('boardings.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pet_name' => 'required',
            'owner_name' => 'required',
            'pet_age' => 'required',
            'entry_date' => 'required|date',
            'exit_date' => 'required|date'
        ]);

        PetBoarding::create($data);
        return redirect()->route('boardings.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pet_boardings = PetBoarding::findOrFail($id);
        return view('boardings.edit', ['pet_boardings' => $pet_boardings]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pet_name' => 'required',
            'owner_name' => 'required',
            'pet_age' => 'required',
            'entry_date' => 'required|date',
            'exit_date' => 'required|date'
        ]);

        $pet_boardings = PetBoarding::findOrFail($id);
        $pet_boardings->update($data);

        return redirect()->route('boardings.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pet_boardings = PetBoarding::findOrFail($id);
        $pet_boardings->delete();

        return redirect()->route('boardings.index')->with('success', 'Data berhasil dihapus');
    }
}