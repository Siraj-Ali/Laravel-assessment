<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taskModel extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = ['user_id', 'title', 'description', 'priority', 'status'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categories() {
        return $this->belongsToMany(categorModel::class, 'category_tasks', 'task_id', 'category_id')->select('category_id','name');
    }
    public function comments() {
        return $this->hasMany(PostComment::class, 'task_id');
    }

    public function image() {
        return $this->morphOne(Images::class, 'imagable');
    }

    public function images()  {
        return $this->morphMany(images::class, 'imagable');
    }
}
