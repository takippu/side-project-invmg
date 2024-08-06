<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rr_crossmember extends Model
{
    use HasFactory;
    // Specify the table if it's not the plural form of the model name
    protected $guarded = [];
    public function InventoryItems()
    {
        return $this->hasMany(InventoryItems::class, 'subcategory_id');
    }
}
