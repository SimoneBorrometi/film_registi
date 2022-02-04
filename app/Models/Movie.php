<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Director;

class Movie extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','date','score','director_id'];
    
    public function director()
    {
        $this->belongsTo(Director::class);
    }
}
