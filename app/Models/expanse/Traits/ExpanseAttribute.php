<?php

namespace App\Models\expanse\Traits;

/**
 * Class SupplierAttribute.
 */
trait ExpanseAttribute
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
         
                '.$this->getEditButtonAttribute("supplier-data", "biller.expanses.edit").'
                '.$this->getDeleteButtonAttribute("supplier-data", "biller.expanses.destroy").'
                ';
    }
}
