<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        // this is using elequant way
        // $post = Post::where('slug', $slug)->firstOrFail();
       
        // this is using db query laravel
        // $post = DB::table('post')->where('slug', $slug)->firstOrFail();
        // if (is_null($post)) {
        //    \abort(404);
        // }

        return view('post.show', compact('post'));
    }


    public function indexPaginate()
    {
        $allPosts = Post::get();
        $titlePosts = Post::get(['title']);
        $titleAndSlug = Post::get(['title', 'slug']);

        // pagination with number of page
        $paginatePost = Post::latest()->paginate(6);
        // pagination with next and previous button
        $simplePaginationPost = Post::simplePaginate(3);

        return view('post.index', ['posts' => $paginatePost]);
    }

    public function create() 
    {
        return view('post.create', ['post' => new Post()]);
    }

    // parameter Request you can replace with request() function
    public function store(Request $request)
    {
        // Manual input data to database (make sure you have made eloquent model, for this case is Post model)
        // $post = new Post();
        // $post->title = $request->title;
        // $post->slug = Str::slug($request->title);
        // $post->body = $request->body;
        // $post->save();

        // another way to save data to database by using eloquent model
        // Post::create([
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title),
        //     'body' => $request->body
        // ]);


        // validate input with title and body should be filled, and the title not less than 5 char not more than 10
        // both below technique return a array you can use to save to database
        $attr = $this->validate($request, [
            'title' => 'required|min:5|max:10',
            'body' => 'required'
        ]);
        // another form
        $attr = $request->validate([
            'title' => 'required|min:5|max:10',
            'body' => 'required'
        ]);
        // $attr['slug'] = Str::slug($request->title);
        // Post::create($attr);

        // another way to input all data to database, remember you can not input slug directly from the form
        // you you have to use Str::slug from laravel
        $post = $request->all();
        $post['slug'] = Str::slug($request->title);
        Post::create($post);

        // you can use this if you want after post back to all post page by passing to()
        // with route you have been defined
        // return redirect()->to('posts');

        // give message if the input was success or error
        session()->flash('success', 'The post was created');
        // session()->flash('error', "the post can't be created");

        // this is way if you want to stay in the form not want to go to all post page after post create
        // return back();
        return redirect("posts");
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));        
    }

    // you can use another way, make a request class and pass to be parameter
    // move your validation to Request class 
    public function update(PostRequest $request, Post $post)
    {   
        $attr = $request->all();

        $post->update($attr);

        session()->flash('success', 'the post was updated');

        return redirect()->to('posts');
    }

    public function validateRequest(): array
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash("success", "The post was destroyed");
        return redirect('posts');
    }
}
