<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'flagship','icon_svg','category_name','category_desc','category_status','display_menu','category_image','meta_keywords'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_product';
}
