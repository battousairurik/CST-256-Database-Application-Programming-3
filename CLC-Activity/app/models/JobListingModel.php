<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class JobListingModel extends Model{
    
    protected $table ="job_listing";
    
    protected $fillable = [
        'companyName', 'address', 'jobTitle', 'responsibilities', 'salary', 'prerequisites',
    ];
    
}