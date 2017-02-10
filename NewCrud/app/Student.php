<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
    	
        'Name',
        'Email',
        'Gender',
        'Department',
        'Sports',
        'Color',
        'Physics',
        'Chemistry',
        'Maths'
        
    ];
    protected $table = 'students';
}
