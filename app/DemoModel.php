<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemoModel extends Model
{
    //
    protected $table = 'demos';
    protected $fillable  = ['name','email'];
}
