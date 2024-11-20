<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function eventPass(){
        return $this->hasMany(Pass::class,'event_id');
    }

    public function eventVote(){
        return $this->hasMany(Event_vote::class,'event_id');
    }

    public function event(){
        return $this->belongsTo(User::class,'user_id');
    }

}
