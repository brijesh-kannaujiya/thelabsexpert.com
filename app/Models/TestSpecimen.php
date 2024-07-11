<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestSpecimen extends Model
{
    use HasFactory;
    public $guarded = [];
    public $with = ['specimen'];
    public function specimen()
    {
        return $this->belongsTo(Specimen::class);
    }
}
