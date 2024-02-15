<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'student_id',
        'email',
        'phone',
    ];


    protected $guarded = [];


    public function student(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Student::class);
    }
}
