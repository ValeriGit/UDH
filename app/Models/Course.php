<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function audiences()
    {
        return $this->hasMany(Audience::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Module::class);
    }

    public function observation()
    {
        return $this->hasOne(Observation::class);
    }
}
