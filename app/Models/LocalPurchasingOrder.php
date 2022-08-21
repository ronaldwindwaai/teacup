<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalPurchasingOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'lpo_number',
        'project_id',
        'invoice_id',
        'requested_by_user_id',
        'approved',
        'primary_approval_user_id',
    ];

    public function requestedByUserId()
    {
        return $this->belongsTo(User::class);
    }

    public function primaryApprovalUserId()
    {
        return $this->belongsTo(User::class);
    }
    public function secondaryApprovalUserId()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }


}
