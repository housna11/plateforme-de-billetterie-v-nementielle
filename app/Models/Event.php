<?php

namespace App\Models;
use App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
     protected $fillable =[
      'titre',
      'description',
      'date_debut',
      'location',
      'capacite',
      'image',
      'prix',
    ];
     public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
