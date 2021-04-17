<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function budgetItems()
    {
        return $this->hasMany(BudgetItem::class);
    }
}
