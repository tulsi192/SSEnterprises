<?php

namespace App\Models\route\Traits;

/**
 * Class SupplierAttribute.
 */
trait RouteAttribute
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
         
                '.$this->getEditButtonAttribute("supplier-data", "biller.routes.edit").'
                '.$this->getDeleteButtonAttribute("supplier-data", "biller.routes.destroy").'
                ';
    }
}
