<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EmploymentModel extends Model{
    
    protected $table ="employment";
    
    protected $fillable = [
        'companyName', 'address', 'jobTitle', 'responsibilities', 'numYears',
    ];
    
}