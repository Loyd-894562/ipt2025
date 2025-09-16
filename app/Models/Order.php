<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['merchandise_id', 'quantity', 'total_price'];

    public function merchandise() {
        return $this->belongsTo(Merchandise::class);
    }
}
