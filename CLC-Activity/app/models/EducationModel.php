<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model{
    
    protected $fillable = [
        'schoolName', 'address', 'educationLevel', 'degree', 'numYears', 
    ];
    
}