<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominees extends Model
{
    use HasFactory;

    public function getCategoryNominee(){
        return $this->hasMany(Nominees_category::class,'category_id');
    }
}
