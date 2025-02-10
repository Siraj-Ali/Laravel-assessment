<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTaskModel extends Model
{
    use HasFactory;

    protected $table = 'category_tasks';

    protected $fillable = ['category_id', 'task_id'];

    public function category() {
        return $this->belongsTo(categorModel::class, 'category_id');
    }

    public function task() {
        return $this->belongsTo(taskModel::class, 'category_id');
    }
}
