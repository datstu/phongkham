<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlagShip extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'image','status','name','description_sort','seo','slug'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_flagship';
}
