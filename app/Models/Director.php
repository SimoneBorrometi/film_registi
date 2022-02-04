<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Director extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','surname','date_of_birth'];

    public function movies()
    {
        $this->hasMany(Movie::class);
    }
}
