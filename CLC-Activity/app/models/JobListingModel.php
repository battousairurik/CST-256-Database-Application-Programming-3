<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class JobListingModel extends Model{
    
    protected $fillable = [
        'companyName', 'address', 'jobTitle', 'responsibilities', 'salary', 'prerequisites',
    ];
    
}