<?php

namespace App\Models;

use Eloquent;

class Leads extends Eloquent
{
    protected $fillable = ['name', 'email', 'phone'];
    protected $table = 'leads';

}
