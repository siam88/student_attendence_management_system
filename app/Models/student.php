<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
        protected $guarded=[];
    use HasFactory;

    public function getCourses(){
        return $this->belongsToMany(Course::class);
    }
}
