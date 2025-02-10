<?php 
namespace App\Interfaces;

interface CategoryRepositoryInterface {
   
    public function all();

    public function attachCategory($data, $task_id);
}