<?php 
namespace App\Interfaces;

interface TaskRepositoryInterface {
   
    public function all();
    
    public function taskById($id);

    public function create();

    public function save($data);

    public function update($data);

    public function destroye($id);
}