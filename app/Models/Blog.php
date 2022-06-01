<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function category(){
        $this->belongsTo(Category::class);
    }

    public function formation(){
        $this->belongsTo(Formation::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
