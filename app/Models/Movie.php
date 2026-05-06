<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'poster',
        'cover_image',
        'trailer_url',
        'genre',
        'country',
        'duration',
        'age_rating',
        'release_date',
        'status',
    ];

    protected $casts = [
        'release_date' => 'date',
    ];

    protected static function booted(): void
    {
        static::creating(function ($movie) {
            if (empty($movie->slug)) {
                $movie->slug = Str::slug($movie->title) . '-' . uniqid();
            }
        });
    }

    public function getStatusTextAttribute(): string
    {
        return match ($this->status) {
            'now_showing' => 'Đang chiếu',
            'coming_soon' => 'Sắp chiếu',
            'stopped' => 'Tạm dừng',
            default => 'Không xác định',
        };
    }
}