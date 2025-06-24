<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    //
    /** @use HasFactory<\Database\Factories\AppartementFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'street',
        'city',
        'country',
        'description',
        'picture',
        'price_per_day',
        'start_date',
        'end_date',
    ];


}
