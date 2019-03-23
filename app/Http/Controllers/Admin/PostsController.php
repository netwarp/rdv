<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Markdown;
use DOMDocument;
use File;
use Storage;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id','desc')->paginate(20);

        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        $link = 'Create';
        $action = action('Admin\PostsController@store');

        return view('admin.posts.create_or_edit', compact('link', 'action'));
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'tags' => 'required',
            'image' => 'image',
            'content' => 'required',
        ]);

        $html = Markdown::convertToHtml($request->get('content'));
        $doc = new DOMDocument();
        $doc->loadHTML($html);

        $data = [
            'title' => $request->get('title'),
            'slug' => str_slug($request->get('title'), '-'),
            'image' => '',
            'tags' => $request->get('tags'),
            'preview' => $doc->getElementsByTagName('p')->item(0)->nodeValue,
            'status' => $request->get('status'),
            'content' => $request->get('content')
        ];

        if ($request->has('created_at')) {
            $data['created_at'] = $request->get('created_at');
        }

        if ($request->file('image')) {

            $file = $request->file('image');
            $folder = str_random(8);

            $name = $file->getClientOriginalName();

            $path = "images/{$folder}/{$name}";

            $data['image'] = $path;

            $file->storeAs("images/{$folder}", $name);
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post created');
    }

    public function show() {
        dd('ok');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        $link = 'Create';
        $action = action('Admin\PostsController@update', ['id' => $post->id]);

        return view('admin.posts.create_or_edit', compact('post', 'link', 'action'));
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'tags' => 'required',
            'image' => 'image',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $html = Markdown::convertToHtml($request->get('content'));
        $doc = new DOMDocument();
        $doc->loadHTML($html);

        $data = [
            'title' => $request->get('title'),
            'slug' => str_slug($request->get('title'), '-'),
            'image' => '',
            'tags' => $request->get('tags'),
            'preview' => $doc->getElementsByTagName('p')->item(0)->nodeValue,
            'status' => $request->get('status'),
            'content' => $request->get('content')
        ];

        if ($request->has('created_at')) {
            $data['created_at'] = $request->get('created_at');
        }

        if ($request->file('image')) {

            $file = $request->file('image');

            if (! $post->image) {
                $folder = str_random(8);
            }
            else {
                $folder = $post->image;
                $folder = explode('/', $folder);
                $folder = $folder[1];
            }

            $name = $file->getClientOriginalName();

            $path = "images/{$folder}/{$name}";

            $data['image'] = $path;

            $file->storeAs("images/{$folder}", $name);
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated');
    }

    public function destroy(Request $request, $id) {
        $post = Post::findOrFail($id);

        if ($post->image) {
            $folder = $post->image;
            $folder = explode('/', $folder);
            $folder = $folder[1];

            Storage::deleteDirectory("images/$folder");
        }

        $post->delete();


        return redirect()->back()->with('success', 'post deleted');
    }

}
