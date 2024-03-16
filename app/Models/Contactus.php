<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
	protected $table = 'feedback';
	protected $fillable = ['name', 'mobile', 'email', 'message'];
    use HasFactory;
}
