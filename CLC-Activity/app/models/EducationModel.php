<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model{
    
    protected $table = "education";
    
    protected $fillable = [
        'schoolName', 'address', 'educationLevel', 'degree', 'numYears', 
    ];
    
}