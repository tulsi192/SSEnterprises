<?php

namespace App\Models\income\Traits;

/**
 * Class SupplierAttribute.
 */
trait IncomeAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '
         
                '.$this->getEditButtonAttribute("supplier-data", "biller.incomes.edit").'
                '.$this->getDeleteButtonAttribute("supplier-data", "biller.incomes.destroy").'
                ';
    }
}
