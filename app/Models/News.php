<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $guarded = ['id'];

    protected function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    protected function views()
    {
        return $this->hasMany(Post_view::class, 'post_id');
    }
    protected function category()
    {
        return $this->belongsTo(News_category::class, 'category');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });
    }
}
