<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Celebration extends Model 
{

    use HasFactory;
    protected $table = 'celebrations';
    public $timestamps = true;

}