<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_name',
        'photo_alt',
        'photo_descript',
        'image_path',
        ];

    public function banners()
        {
            return $this->hasMany(Banner::class);
        }
}
