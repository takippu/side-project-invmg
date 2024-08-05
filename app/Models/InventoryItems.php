<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItems extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rrcrossmember()
    {
        return $this->belongsTo(rr_crossmember::class, 'subcategory_id');
    }



}
