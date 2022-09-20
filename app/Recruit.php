<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'position','qty','address','date_ex','status','active','post_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_recruit';
}
