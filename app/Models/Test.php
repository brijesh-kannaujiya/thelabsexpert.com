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
    public $with = ['category', 'specimens', 'vials', 'tests'];
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
        return $this->hasMany(TestPackage::class, 'package_id');
    }

    public function testPackage()
    {
        return $this->belongsTo(TestPackage::class, 'package_id');
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }

    public function specimens()
    {
        return $this->hasMany(TestSpecimen::class);
    }

    public function vials()
    {
        return $this->hasMany(TestVial::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'test_categories', 'test_id', 'category_id');
    }

    public function parameters()
    {
        return $this->belongsToMany(Parameter::class, 'test_parameters', 'test_id', 'parameter_id');
    }
}
