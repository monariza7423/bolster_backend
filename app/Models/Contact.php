<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'first_name_kana',
        'last_name_kana',
        'company',
        'email',
        'contact_type',
        'content',
    ];
}
