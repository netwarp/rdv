<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;
use DB;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function getIndex(Request $request) {

        if ($request->filled('search')) {
            $search = $request->get('search');
            $posts = Post::where('title','LIKE',"%{$search}%")
                ->orWhere('content','LIKE',"%{$search}%")
                ->paginate(4);
        }
        else {
		    $posts = Post::where('status', 'published')->orderBy('id', 'desc')->paginate(4);
        }

        return view('front.blog', [
            'posts' => $posts
        ]);
	}

	public function getPost($slug) {
		$post = Post::where('slug', $slug)->first();
        $comments =  Comment::where('post_id', $post->id)->where('validated', true)->get();
		return view('front.post', [
		    'post' => $post,
            'comments' => $comments
        ]);
	}

	public function getTag($tag) {
        $posts = Post::where('tags', 'LIKE', '%'.$tag .'%')->orderBy('id', 'desc')->paginate(4);
        if ($posts->isEmpty()) {
            $posts = Post::inRandomOrder(5)->paginate(4);
        }
        return view('front.blog', [
            'posts' => $posts
        ]);
    }

    public function postComment($id, Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);
        DB::table('comments')->insert([
            'post_id' => $id,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'ip' => sha1($request->ip()),
            'created_at' => Carbon::now()
        ]);
        DB::table('posts')->whereIn('id', [$id])->increment('nb_comments');
        return redirect()->back()->with('success', 'Votre commentaire a bien été validé et est en attente de validation');
	}
}
