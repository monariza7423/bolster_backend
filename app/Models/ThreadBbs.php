<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ThreadBbsReply;

class ThreadBbs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'content',
    ];

    public function replies()
    {
        return $this->hasMany(ThreadBbsReply::class, 'thread_id');
    }
}
