<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppartementRequest;
use App\Models\Appartement;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;
use Illuminate\Support\Str;

class AppartementController extends Controller
{
    function viewAppartement(){
        $appartements = Appartement::whereNotNull('id')->orderBy('id')->get();
        return view('appartementAvailable', compact('appartements'));
    }
    public function detailsAppartement($id){
        $appartement = Appartement::where('id', $id)->firstOrFail();
        return view('detailsapartements', compact('appartement'));
    }
    public function deleteApt($id){
        $appartement = Appartement::where('id',$id);
        $appartement->delete();
        return redirect()->route('appartementAvailable')->with('success', 'Appartement supprimé');
    }
    public function addNewApt(AppartementRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('picture')) {
            $validated['picture'] = $request->file('picture')->store('picture_apt', 'public');
        }

        Appartement::create($validated);

        return redirect()->route('appartementAvailable')->with('success', 'Appartement créé avec succès !');
    }


    public function editApt($id){
         $item = Appartement::find($id);
        return view('editapartements', compact('item'));
    }


    public function UpdateAppartement(AppartementRequest $request, $id)
    {

        $validated = $request->validated();

        $item = Appartement::findOrFail($id);
        $item->fill($validated);

        if ($request->hasFile('picture')) {
            $item->picture = $request->file('picture')->store('picture_apt', 'public');
        }

        $item->save();
        return redirect('/detailapt/'.$id)->with('success', 'Appartement modifié avec succès !');
    }}
