<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorySkill extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name','status'
    ];
    protected $primaryKey = 'id';
    protected $table = 'category_skill';
}
