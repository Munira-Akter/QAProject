<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Question User Relationship Methods


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
