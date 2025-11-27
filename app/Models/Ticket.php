<?php

namespace App\Models;
use App\Models\Event;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
     protected $fillable =[
      'code',
      'montant',
      'pdf_path',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function event()
    {
        return $this->belongsTo(Event::class);
    }
    
    
}
