<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $guarded = [];
    public $with = ['category', 'vial', 'specimen'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function vial()
    {
        return $this->belongsTo(Vial::class, 'vial_id', 'id');
    }
    public function specimen()
    {
        return $this->belongsTo(Specimen::class, 'specimen_id', 'id');
    }
    public function tests()
    {
        return $this->hasMany(PackageTest::class, 'package_id', 'id')
            ->where('testable_type', Test::class);
    }

    public function testPackages()
    {
        return $this->hasMany(TestPackage::class, 'test_id');
    }
}
