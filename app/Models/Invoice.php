<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'vat',
        'sub_total',
        'discount',
        'total',
        'supplier_id',
        'status',
        'status_message',
        'paid_date',
        'file_url',
    ];

    protected $casts = [
        'paid_date' => 'datetime:Y-m-d',
        'invoice_date' => 'datetime:Y-m-d',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
