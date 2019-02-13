<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Property;

class Video extends Model
{
    public function property(){
    return $this->belongsTo(Property::class);
  }
}