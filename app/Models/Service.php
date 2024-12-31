<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'category',
        'is_available',
        'image',
        'meta_description',
        'meta_keywords',
        'slug',
        'meta_title'
    ];



    protected static function boot()
    {
        parent::boot();

        // Automatically generate the slug on creation
        static::creating(function ($service) {
            $service->slug = self::generateUniqueSlug($service->name);
        });

        // Automatically update the slug on name change during update
        static::updating(function ($service) {
            if ($service->isDirty('name')) { // Check if the name has been modified
                $service->slug = self::generateUniqueSlug($service->name);
            }
        });
    }

    // Generate a unique slug for the service
    private static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        // Ensure slug uniqueness
        while (Service::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    /**
     * Get all of the bookings for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'service_id', 'id');
    }
}
