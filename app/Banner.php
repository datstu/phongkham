<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'image','status'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_banner';
}
