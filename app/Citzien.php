<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citzien extends Model
{
    protected $fillable = [
        'citzien_full_name', 'citzien_gender','citzien_city','citzien_nid','citzien_mobile','citzien_address'
    ];
}
