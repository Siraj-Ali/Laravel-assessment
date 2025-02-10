<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorModel extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function tasks() {
        return $this->belongsToMany(taskModel::class, 'category_tasks', 'category_id', 'task_id');
    }

    // public function taskss() {
    //     return $this->belongsToMany(taskModel::class);
    // }
}
