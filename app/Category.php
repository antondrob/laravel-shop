<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40). "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }
    //Get children category
    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }
    // Polymorphic relation with products
    public function products(){
        return $this->morphedByMany('App\Product', 'polymorphic_relation');
    }
    public function scopeLastCategories($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
