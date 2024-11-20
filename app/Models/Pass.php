<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pass extends Model
{
    use HasFactory;
    protected $table = "passes";

    public function passEvent(){
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function passTicket(){
        return $this->hasMany(Ticket::class, 'pass_id');
    }
}
