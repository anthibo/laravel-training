<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table = 'contact_us';
    protected $fillable = ['location', 'email', 'phone', 'facebook_link', 'linkedIn_link'];
    public $timestamps = false;
}
