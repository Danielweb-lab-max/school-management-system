<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;
    public function students():BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }
}
