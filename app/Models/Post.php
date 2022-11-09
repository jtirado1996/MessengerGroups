<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
        'category_id',
        'messenger_brand_id',
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function messengerBrand()
    {
        return $this->belongsTo(MessengerBrand::class);
    }
}
