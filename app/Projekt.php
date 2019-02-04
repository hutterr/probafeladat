<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projekt extends Model
{
    protected $table = 'projekts';
    public  $primaryKey = 'id';
    public $timestamps = false;
}
