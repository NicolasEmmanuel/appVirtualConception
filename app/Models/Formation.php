<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function blogs(){
        $this->hasMany(Blog::class);
    }

    public function detail_formation(){
        return $this->hasMany(DetailFormation::class);
    }
}