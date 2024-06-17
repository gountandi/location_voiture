<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Employer extends Model
{
    use HasFactory;


    protected $fillable=[
        'salaire',
        'poste',
        'per_id'
    ];


    

    public function presonne(): BelongsTo
    {
        return $this->belongsTo(Personne::class);
    }
}
