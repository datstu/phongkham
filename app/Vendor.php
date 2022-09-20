<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'image','status','name','description','seo','slug'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_vendor';
}
