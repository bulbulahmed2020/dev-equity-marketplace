<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
   protected $table = 'pages';
    protected $fillable = ['page_name','page_content','page_meta_title','page_meta_description','page_status'];
    public $timestamps = true;
}
