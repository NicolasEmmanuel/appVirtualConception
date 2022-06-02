<?php

namespace App\Models;

use App\Models\Blog;
use App\Models\DetailFormation;
use App\Models\DetailDroiteFormation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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