<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class AffinityGroupsModel extends Model{
    
    protected $table = "affinity_groups";
    
    protected $fillable = [
        'id', 'group_name', 'group_description',
    ];
    
}