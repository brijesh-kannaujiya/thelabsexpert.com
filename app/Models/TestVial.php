<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestVial extends Model
{
    use HasFactory;
    public $guarded = [];
    public $with = ['vial'];
    public function vial()
    {
        return $this->belongsTo(Vial::class);
    }
}
