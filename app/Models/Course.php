<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    protected $appends = ['prefix_name'];
    /**
     * @return BelongsTo
     */
    public function instructor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor', 'id');
    }

    public function getPrefixNameAttribute(): string
    {
        $name = explode(' ',$this->name);
        if(count($name) > 1){
            return  substr($this->name[0], 0, 1).''.substr($this->name[1], 0, 1);
        }
        return  substr($this->name[0], 0, 1);
    }
}