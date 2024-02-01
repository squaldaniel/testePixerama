<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadsModel extends Model
{
    use HasFactory;

    public $table = 'leads';
    public $fillable = [
        'name',
        'email',
        'subject',
        'plan',
        'message',
    ];
    public $timestamps = false;
}
