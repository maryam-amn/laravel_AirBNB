<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppartementRequest;
use App\Models\Appartement;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appartements = Appartement::get();
        return view('appartementAvailable', compact('appartements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creationappartements');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppartementRequest $request)
    {
        //
        $validated = $request->validated();

        if ($request->hasFile('picture')) {
            $validated['picture'] = $request->file('picture')->store('picture_apt', 'public');
        }

        Appartement::create($validated);
        return redirect()->route('appartements.index')->with('success', 'Appartement ajouté avec succès !');


    }

    /**
     * Display the specified resource.
     */
    public function show(Appartement $appartement)
    {
        //
        $appartement = Appartement::where('id', $appartement->id)->firstOrFail();
        return view('detailsapartements', compact('appartement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appartement $appartement)
    {
        $item = $appartement;
        return view('editapartements', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppartementRequest $request, Appartement $appartement)
    {
        $validated = $request->validated();

        $item = Appartement::findOrFail($appartement->id);
        $item->fill($validated);

        if ($request->hasFile('picture')) {
            $item->picture = $request->file('picture')->store('picture_apt', 'public');
        }

        $item->save();
        return redirect()->route('appartements.show', $item->id)->with('success', 'Appartement edité  avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appartement $appartement)
    {
        $filePath = storage_path('app/public/' . $appartement->picture);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $appartement->delete();
        return redirect()->route('appartements.index')->with('success', 'Appartement supprimé avec succès !');
    }


}
