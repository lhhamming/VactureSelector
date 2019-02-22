<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacture extends Model
{
    protected $table = 'vactures';
    protected $fillable = ['Name','Link','Type'];
}
