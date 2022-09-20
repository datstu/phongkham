<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_aboutus';
}
