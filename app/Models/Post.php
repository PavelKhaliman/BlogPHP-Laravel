<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = false;
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    /**
     * Normalize stored image path to a relative path like `images/foo.jpg`.
     */
    public function setPostImageAttribute($value): void
    {
        if (is_string($value)) {
            $clean = preg_replace('#^(?:public/)?storage/#', '', $value);
            $this->attributes['post_image'] = ltrim($clean ?? '', '/');
            return;
        }
        $this->attributes['post_image'] = $value;
    }

    /**
     * Get public URL for the image using the storage symlink.
     */
    public function getImageUrlAttribute(): string
    {
        $p = (string)($this->attributes['post_image'] ?? '');
        $p = ltrim(preg_replace('#^storage/#', '', $p), '/');
        return asset('storage/'.$p);
    }
}
