<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $guarded = [];

    // public $with = ['tests', 'category'];
    public function tests()
    {
        return $this->hasMany(PackageTest::class, 'package_id', 'id')
            ->where('testable_type', Test::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
