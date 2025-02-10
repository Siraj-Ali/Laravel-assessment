<?php
namespace App\Interfaces;

interface CheckoutRepositoryInterface {
   
    public function checkout($id);

    public function storeTransection($data);
}