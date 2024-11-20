<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function categoryEventVote(){
        return $this->belongsTo(Event_vote::class,'event_vote_id');
    }

    public function getCategoryNominee(){
        return $this->hasMany(Nominees_category::class,'category_id');
    }
}
