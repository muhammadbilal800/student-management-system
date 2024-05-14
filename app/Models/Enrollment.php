<?php

namespace App\Models;

use App\Models\Batch;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable=[
        'enroll_no',
        'slug',
        'batch_id',
        'student_id',
        'join_date',
        'fee',
    ];

    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

}
