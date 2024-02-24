<?php

namespace App\Models\income\Traits;

use App\Models\hrm\Hrm;
use App\Models\hrm\HrmMeta;

/**
 * Class SupplierRelationship
 */
trait IncomeRelationship
{
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User')->withoutGlobalScopes();
    }
    
}
