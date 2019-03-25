<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SkillModel extends Model{
    
    protected $table = "skills";
    
    protected $fillable = [
        'skillTitle', 'skillDescription',
    ];
    
}