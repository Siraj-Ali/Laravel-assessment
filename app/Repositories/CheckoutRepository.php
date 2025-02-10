<?php 
namespace App\Repositories;

use App\Interfaces\CheckoutRepositoryInterface;
use App\Models\paidTransectionModel;
use App\Models\PostModel;

class CheckoutRepository implements CheckoutRepositoryInterface {

    public function checkout($id) {
        return PostModel::find($id);
    }

    public function storeTransection($data) {
        $transection = new paidTransectionModel();
        $transection->user_id = 1;
        $transection->transection_id = $data->id;
        $transection->amount = $data->amount;
        $transection->currency = $data->currency;
        return $transection->save();
    }
}