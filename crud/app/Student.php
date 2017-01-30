<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
    	
        'name',
        'email',
        'password',
        'Gender',
        'Department',
        'Sports',
        'Colors',
        'Physics',
        'Chemistry',
        'Maths'
        
    ];
    protected $table = 'students';
}
