<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_vote extends Model
{
    use HasFactory;

    public function eventVoteCategory(){
        return $this->hasMany(Category::class,'event_vote_id');
    }

}
