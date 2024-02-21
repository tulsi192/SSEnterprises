<?php

namespace App\Models\route\Traits;

use App\Models\hrm\Hrm;
use App\Models\hrm\HrmMeta;

/**
 * Class SupplierRelationship
 */
trait RouteRelationship
{
    public function users()
    {
        return $this->hasManyThrough(Hrm::class, HrmMeta::class, 'route_id', 'id', 'id', 'user_id');
    }
    
}
