<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = [
        'first_name',
        'last_name',
    ];


    protected $guarded = [];

    public function profile(): HasOne
    {
        return $this->hasOne(\App\Models\Profile::class) ;
    }
}
