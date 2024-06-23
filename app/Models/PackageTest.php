<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTest extends Model
{
    use HasFactory;
    public $guarded = [];
    public $with = ['test'];
    public function test()
    {
        return $this->belongsTo(Test::class, 'testable_id', 'id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
