<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function create()
    {
        return view('level.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        // The incoming request is Valid

        // Retrieve the validated input data...
        $validated = $request->validated();

        // Retrieve a portion of the validated input data...
        $validated = $request->safe()->only(['levelKode', 'levelNama']);
        $validated = $request->safe()->except(['levelKode', 'levelNama']);

        // Store the post...

        return redirect ('/level');
    }

    public function edit($id)
    {
        $level = LevelModel::find($id);
        return view('level.edit', ['level' => $level]);
    }

    public function update($id, Request $request)
    {
        $level = LevelModel::find($id);

        $level->level_kode = $request->kodeLevel;
        $level->level_nama = $request->namaLevel;

        $level->save();

        return redirect('/level');
    }

    public function destroy($id)
    {
        $level = LevelModel::findOrFail($id);
        $level->delete();

        return redirect('/level');
    }
}
