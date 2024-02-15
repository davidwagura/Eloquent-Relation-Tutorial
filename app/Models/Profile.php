<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'email',
        'phone',
    ];


    protected $guarded = [];


    public function students()
    {
        return $this->belongsTo(\App\Student::class);
    }
}
