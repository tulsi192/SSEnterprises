<?php

namespace App\Models\expanse\Traits;

use App\Models\hrm\Hrm;
use App\Models\hrm\HrmMeta;

/**
 * Class SupplierRelationship
 */
trait ExpanseRelationship
{
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User')->withoutGlobalScopes();
    }
    
}
