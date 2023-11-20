<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'difficulty',
        'lessons',
        'thumbnail',
        'description',
        'status',
        'credit_hours',
        'ending_date',
        'instructor',
    ];

    protected $appends = ['prefix_name', 'enrolled'];
    /**
     * @return BelongsTo
     */
    public function instructor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor', 'id');
    }

    /**
     * @return HasMany
     */
    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    /**
     * @return HasMany
     */
    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(CourseFeedback::class);
    }

    public function getPrefixNameAttribute(): string
    {
        $name = explode(' ',$this->name);
        if(count($name) > 1){
            return  substr($this->name[0], 0, 1).''.substr($this->name[1], 0, 1);
        }
        return  substr($this->name[0], 0, 1);
    }

    public function getEnrolledAttribute(): bool
    {
       $en =  $this->enrollments->where('user_id', auth()->user()->id)->first();
       return isset($en);
    }
}
