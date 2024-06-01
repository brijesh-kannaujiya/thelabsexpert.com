<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Module extends Model
{
    public function permissions()
    {
        return $this->hasMany(Permission::class, 'module_id', 'id');
    }
}
