<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDroiteFormation extends Model
{
    use HasFactory;

    public function formation(){
        $this->belongsTo(Formation::class);
    }
}