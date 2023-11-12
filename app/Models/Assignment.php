<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['title', 'description', 'thumbnail', 'total_marks', 'passing_marks', 'submission_date',  'course_id'];

    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }


    public function student_assignment()
    {
        return $this->hasOne(StudentAssignment::class, 'assignment_id');
    }
}
