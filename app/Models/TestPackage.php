<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPackage extends Model
{
    use HasFactory;
    public $guarded = [];
    public $with = ['test'];
    public function test()
    {
        return $this->hasOne(Test::class, 'id', 'test_id');
    }
}
