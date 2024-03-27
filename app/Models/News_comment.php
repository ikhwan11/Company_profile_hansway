<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
