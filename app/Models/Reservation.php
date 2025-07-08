<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'appartement_id',
        'date_reserved',
        'nbr_of_people',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appartement()
    {
        return $this->belongsTo(Appartement::class);
    }


}
