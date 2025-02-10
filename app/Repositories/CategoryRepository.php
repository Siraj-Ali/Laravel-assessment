<?php 
namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\categorModel;
use App\Models\CategoryTaskModel;
use App\Models\User;

class CategoryRepository implements CategoryRepositoryInterface {

    public function all() {
        return categorModel::all();
    }

    public function attachCategory($data, $task_id) {
        foreach($data as $cate) {
            $cateTask = new CategoryTaskModel();
            $cateTask->category_id = $cate;
            $cateTask->task_id = $task_id;
            $cateTask->save();
        }
        return true;
    }

    
    
}