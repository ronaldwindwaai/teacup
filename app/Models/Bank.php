<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'account_number',
        'branch_code',
        'country'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
