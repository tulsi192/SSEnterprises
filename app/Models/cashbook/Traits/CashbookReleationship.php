<?php

namespace App\Models\cashbook\Traits;
use App\Models\User;



/**
 * Class TransactionRelationship
 */
trait CashbookRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class)->withoutGlobalScopes();
    }
}
