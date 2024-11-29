<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }

    public function enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function testimonial()
    {
        return $this->hasMany(Testimonial::class);
    }
}
