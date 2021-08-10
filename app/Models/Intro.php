<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    protected $table = 'intro';
    protected $fillable = ['description', 'photo'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
