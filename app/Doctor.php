<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name','sort_desc','content','category_skill_id','status','image'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_doctor';
}
