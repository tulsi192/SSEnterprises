<?php

namespace App\Models\cashbook\Traits;

/**
 * Class BankAttribute.
 */
trait CashbookAttribute
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
         '.$this->getViewButtonAttribute("cashbook-manage", "biller.banks.show").'
                '.$this->getEditButtonAttribute("cashbook-edit", "biller.banks.edit").'
                '.$this->getDeleteButtonAttribute("cashbook-delete", "biller.banks.destroy").'
                ';
    }
}
