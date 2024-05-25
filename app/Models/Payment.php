<?php

namespace App\Models;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
        'enrollment_id',
        'slug',
        'paid_date',
        'amount',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
