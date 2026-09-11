<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'icon',
        'short_desc',
        'full_desc',
        'features',
        'starting_price',
        'price_unit',
        'badge',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'features' => 'array',
            'is_active' => 'boolean',
            'starting_price' => 'integer',
            'sort_order' => 'integer',
        ];
    }

    public static function booted(): void
    {
        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }

    public function getFormattedPriceAttribute(): string
    {
        if ($this->starting_price <= 0) {
            return 'Custom Quote';
        }
        return '৳' . number_format($this->starting_price);
    }
}
