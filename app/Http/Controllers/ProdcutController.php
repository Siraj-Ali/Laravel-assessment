<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ProdcutController extends Controller
{
    public function index() {
        $user = Auth()->user();
        $produts = ProductModel::all();
        return 'test';
    }
}
