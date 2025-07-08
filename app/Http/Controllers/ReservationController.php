<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Appartement;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $validated = $request->validated();
        $appartement = Appartement::findOrFail($request->appartement_id);

        $date = $request->date_reserved;
        if ($date < $appartement->start_date || $date > $appartement->end_date) {
            return back()->withErrors('La date est hors de la période de disponibilité.');
        }

        if (Reservation::where('appartement_id', $appartement->id)
            ->where('date_reserved', $date)
            ->exists()) {
            return back()->withErrors('Cette date est déjà réservée, Veuillez choisir une autre date.');
        }
        Reservation::create($validated);
        return redirect()->route('appartements.index')->with('success', 'Réservation enregistrée !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $res = Reservation::where('id', $reservation->id)->firstOrFail();
        return view('bookapartements', compact('res'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
