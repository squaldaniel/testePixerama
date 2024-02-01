<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;

    public $table = 'users';
    public $timestamps = false;

    public $fillable = [
        'email',
        'passwd',
        'active'
    ];
}
