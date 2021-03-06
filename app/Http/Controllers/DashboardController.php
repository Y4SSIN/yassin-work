<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Project;
use App\Career;
use App\Category;
use App\Tag;
use App\Service;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('dashboard.index');
    }

    public function post(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.posts')->with('posts', $user->posts)->with('posts', $posts);
    }

    public function project(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $projects = Project::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.projects')->with('projects', $user->projects)->with('projects', $projects);
    }

    public function service(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $services = Service::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.services')->with('services', $user->services)->with('services', $services);
    }

    public function career(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $careers = Career::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.careers')->with('careers', $user->careers)->with('careers', $careers);
    }

    public function category(){
        $categories = Category::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.categories')->with('categories', $categories);
    }

    public function tag(){
        $tags = Tag::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.tags')->with('tags', $tags);
    }
}
