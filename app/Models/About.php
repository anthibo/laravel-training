<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    protected $table = 'about_us';
    protected $fillable = ['description_type', 'about_description'];
    protected $primaryKey = 'about_id';
    public $timestamps = false;
}
