<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;
use Illuminate\Support\Str;

class AppartementController extends Controller
{
    function viewAppartement(){
        $appartements = Appartement::all()->sortBy('id');

        return view('appartementAvailable', compact('appartements'));
    }
    public function detailsAppartement($id){
        $appartement = Appartement::findOrFail($id);
        return view('detailsapartements', compact('appartement'));
    }
    public function addNewApt(Request $request){
        $request->validate([
            'street' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price_per_day' => 'required|numeric|min:0',
        ]);

        $data = new Appartement();
        $data->street = $request->street;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->description = $request->description;
        $data->user_id = $request->user_id;

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('appartement'), $imageName);
            $data->picture = $imageName;
        }

        $data->price_per_day = $request->price_per_day;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->save();

        return redirect('/avaibleapt')->with('success', 'Appartement créer avec succès !');
    }
    public function deleteApt($id){
        Appartement::destroy($id);
        return redirect('/avaibleapt')->with('success', 'Appartement supprimé avec succès !');
    }

    public function editApt($id){
         $item = Appartement::find($id);
        return view('editapartements', compact('item'));
    }

    public function UpdateAppartement(Request $request, $id)
    {
        $item = Appartement::findOrFail($id);

        $item->street = $request->input('street');
        $item->city = $request->input('city');
        $item->country = $request->input('country');
        $item->description = $request->input('description');
        $item->price_per_day = $request->input('price_per_day');
        $item->start_date = $request->input('start_date');
        $item->end_date = $request->input('end_date');

         if ($request->hasFile('picture')) {
        $image = $request->file('picture');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('appartement'), $imageName);
        $item->picture = $imageName;}

        $item->save();

        return redirect('/detailapt/'.$id)->with('success', 'Appartement modifié avec succès !');
    }
}
