<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['full_name','designation','avatar','role_in_company','status'];
    public $timestamps = true;
}
