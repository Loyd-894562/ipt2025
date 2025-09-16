<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Mass Assignable fields
    protected $fillable = ['name', 'description'];

    //Relationship
    public function merchandises() {
        return $this->hasMany(Merchandise::class);
    }
}
