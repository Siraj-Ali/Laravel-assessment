<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Interfaces\UserRepositoryInterface;
use App\Models\RoleModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->middleware('auth');
        $this->userRepo = $userRepo;
    } 

    public function index() {
        $users = $this->userRepo->all();
        // dd($users->toArray());
        return view('user.users', compact('users'));
    }

    public function edit($id) {
        $user = $this->userRepo->edit($id);
        $roles = RoleModel::all();
        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request) {
        $user = $this->userRepo->update($request->all());
        if($user) {
            return redirect()->route('all.user')->with('success', 'User updated successfully');
        }else {
            return redirect()->route('all.user')->with('error', 'Opps! something went wrong');
        }
    }

    public function destroye($id) {
        $user = $this->userRepo->destroye($id);
        
        if($user) {
            return redirect()->route('all.user')->with('success', 'User destroye successfully');
        }else {
            return redirect()->route('all.user')->with('error', 'Opps! something went wrong');
        }
    }
}
