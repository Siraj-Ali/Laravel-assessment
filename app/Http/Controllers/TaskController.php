<?php

namespace App\Http\Controllers;

use App\Interfaces\TaskRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TaskController extends Controller
{
    private TaskRepositoryInterface $taskRepo;
    public function __construct(TaskRepositoryInterface $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }
    public function index() {
        $posts = $this->taskRepo->all();
        return view('landing', compact('posts'));
    }

    public function createPost() {
        $users = $this->taskRepo->create();
        return view('tasks.createPost', compact('users'));
    }

    public function savePost(Request $request) {
        
        $this->taskRepo->save($request->all());

        return redirect()->route('landing')->with('message', 'Post created successfully');

    }

    public function editPost($id) {
        $post = $this->taskRepo->taskById($id);
        $users = $this->taskRepo->create();
        return view('posts.editPost', compact('post', 'users'));
    }

    public function updatePost(Request $request) {
        $this->taskRepo->update($request->all());

        return redirect()->route('landing')->with('message', 'Post updated successfully');
    }
}
