<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $table = 'contacts';
    protected $fillable = ['contact_name','contact_email','contact_phone'];
    public $timestamps = true;
}
