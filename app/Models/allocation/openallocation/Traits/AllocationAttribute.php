<?php

namespace App\Models\allocation\openallocation\Traits;

/**
 * Class SupplierAttribute.
 */
trait AllocationAttribute
{
    public function getActionButtonsAttribute()
    {
        return '
         
                '.$this->getEditButtonAttribute("supplier-data", "biller.allocations.edit").'
                
                ';
    }
}
