<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaneraInfo extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'phone','address','link_fb','page_id_fb','link_youtube','link_instagram','email','type'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_garenal_setting';

}
