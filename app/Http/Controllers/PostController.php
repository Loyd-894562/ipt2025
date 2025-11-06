<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Show the index page (button + list of posts).
     */
    public function index()
    {
        
        $posts = Post::with('user')->latest()->get();

        return view('posts.index', compact('posts'));
    }


    /**
     * Show the create page (form only).
     */
    public function create()
    {
        return view('posts.create');
    }


    /**
     * Handle storing a new post.
     */
    public function store(Request $request){
        //Validate all the fields
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'comment' => 'nullable|string|max:255'
        ]);

//Creation of new post
        Post::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'comment' => $validated['comment'] ?? null,
            'user_id' => Auth::id() ?? 1
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.'); 
    }


}

