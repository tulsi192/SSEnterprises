<?php

namespace App\Models\allocation\openallocation\Traits;
use App\Models\warehouse\Warehouse;
use App\Models\route\Route;

/**
 * Class SupplierRelationship
 */
trait AllocationRelationship
{
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    // public function routes()
    // {
    //     return $this->belongsToMany(Route::class);
    // }
}
