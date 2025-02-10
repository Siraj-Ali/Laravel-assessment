<?php 
namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\PostModel;
use App\Models\taskModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface {

    public function all() {
        return User::with(['role', 'postComments'])->whereNot('id', Auth::user()->id)->get();
        // return User::with(['image'])->get(); //MorphOne relationship
        // return User::with(['image'])->find(5);
    }

    public function edit($id) {
        return User::find($id);
    }

    public function update($data) {
        $user = User::find($data['user_id']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role_id = $data['role'];
        if($user->update()) {
            return true;
        }else {
            return false;
        }
    }

    public function destroye($id)
    {
        $user = User::find($id);
        if($user->delete()) {
            return true;
        }else {
            return false;
        }
    }

    
    
}