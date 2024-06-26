<?php

namespace App\Models;


use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'address',
        'number',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
