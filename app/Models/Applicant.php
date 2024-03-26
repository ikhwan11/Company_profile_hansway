<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->whereHas('career', function ($query) use ($search) {
                $query->where('position', 'like', '%' . $search . '%');
            });
        });
    }

    protected function career()
    {
        return $this->belongsTo(Career::class, 'id_lowongan');
    }
}
