<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Question User Relationship Methods


    public function user(){
        return $this->belongsTo('App\Models\User');
    }


}
