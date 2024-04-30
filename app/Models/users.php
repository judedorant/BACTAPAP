<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    // use HasFactory;

    protected $table = 'users';

    // Define the fillable fields (optional, but recommended for mass assignment)
    protected $fillable = [
        'username', 'email', 'email_verified_at', 'password',
    ];

}