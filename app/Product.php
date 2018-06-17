<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = ['title', 'slug', 'sku', 'description', 'image', 'published', 'viewed', 'created_by', 'modified_by'];
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40). "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }
    // Polymorphic relation with categories
    public function categories(){
        return $this->morphToMany('App\Category', 'polymorphic_relation');
    }
    public function scopeLastProducts($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
