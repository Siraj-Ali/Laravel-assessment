<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\taskModel;
use Illuminate\Http\Request;

class ApiTaskController extends Controller
{
    public function index(Request $request) {
        $query = taskModel::query();
        if($sort = $request->input('sort')) {
            $query->orderBy('priority', $sort);
        }
        if($filter = $request->input('filter')) {
            $query->where('title', 'LIKE', '%'.$filter.'%')
                  ->orWhere('description', 'LIKE', '%'.$filter.'%');
        }

        $perPage = 6;
        $page = $request->input('page', 1);
        $total = $query->count();

        $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();

        return [
            'data' => $result,
            'total' => $total,
            'page' => $page,
            'last_page' => ceil($total / $perPage)
        ];
        
    }
    
}
