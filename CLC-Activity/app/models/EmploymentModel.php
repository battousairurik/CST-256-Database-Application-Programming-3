<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EmploymentModel extends Model{
    
    protected $fillable = [
        'companyName', 'address', 'jobTitle', 'responsibilities', 'numYears',
    ];
    
}