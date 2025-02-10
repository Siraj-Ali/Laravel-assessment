<?php 
namespace App\Interfaces;

interface UserRepositoryInterface {
   
    public function all();

    public function edit($user);
    
    public function update($user);

    public function destroye($user);
}