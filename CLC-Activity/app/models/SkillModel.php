<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SkillModel extends Model{
    
    protected $fillable = [
        'skillTitle', 'skillDescription',
    ];
    
}