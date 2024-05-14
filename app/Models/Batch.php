<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batch extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'date',
        'course_id'
    ];


    public function course()
{
    return $this->belongsTo(Course::class);


}

public function enrollments()
{
    return $this->hasMany(Enrollment::class);
}

}



