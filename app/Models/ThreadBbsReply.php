<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ThreadBbs;

class ThreadBbsReply extends Model
{
    use HasFactory;


    protected $fillable = [
        'thread_id',
        'name',
        'content',
    ];

    public function threadBbs()
    {
        return $this->belongsTo(ThreadBbs::class, 'thread_id');
    }
}
