<?php 
namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\CategoryTaskModel;
use App\Models\PostModel;
use App\Models\taskModel;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class TaskRepository implements TaskRepositoryInterface {

    public function all() {
        if(Cache::tags('task')->has('tasks')) {
           return Cache::tags('task')->get('tasks');
        }else {
            $tasks = taskModel::with(['user','categories'])->orderBy('priority', 'ASC')->get();
            Cache::tags(['task'])->put('tasks', $tasks, now()->addMinutes(60));
            return $tasks;
        }

        // Second option of cache 
        // return Cache::remember('tasks', now()->addMinutes(60), function()
        // {
        //     return taskModel::with('user')->orderBy('priority', 'ASC')->get();
        // });
    }

    public function taskById($id) {
        return taskModel::with('categories')->find($id);
    }
     
    public function create() {
        return User::all();
    }

    public function save($data) {
        return taskModel::create($data);
        
    }

    public function update($data) {
        return taskModel::updateOrCreate([
            'id' => $data['task_id']
        ],
        [
            'user_id'     => $data['user_id'],
            'title'       => $data['title'],
            'description' => $data['description'],
            'priority'      => $data['priority'],
            'status'      => $data['status']
        ]
    );
    }

    public function destroye($id) {
        $task = taskModel::find($id);
        CategoryTaskModel::where('task_id', $id)->delete();
        if($task->delete()) {
            return true;
        }else {
            return false;
        }
    }
    
}