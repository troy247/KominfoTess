<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\SubDistrict;

class Place extends Model
{
    
    use HasFactory;
    public $guarded = [];

    public function subDistrict()
    {
        return $this->belongsTo(SubDistrict::class);
    }

    //Relasi One to Many
    public function menus(){
        return $this->hasMany(Menu::class);
    }
}
