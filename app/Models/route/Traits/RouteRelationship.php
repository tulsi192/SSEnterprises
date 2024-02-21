<?php

namespace App\Models\route\Traits;

use App\Models\route\Route;
use App\Models\supplier\Supplier;

/**
 * Class SupplierRelationship
 */
trait RouteRelationship
{
    public function suppliers(){
    return $this->hasMany(Supplier::class,'route_id');
}
    
}
