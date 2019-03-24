<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function index() {
        $comments = Comment::orderBy('id', 'desc')->paginate(8);

        return view('admin.comments.index', compact('comments'));
    }

    public function create() {

    }

    public function store() {

    }

    public function show() {

    }

    public function edit($id) {
        $comment = Comment::findOrFail($id);

        return view('admin.entities.comments.edit', compact('comment'));
    }

    public function update($id, Request $request) {
        $comment = Comment::findOrFail($id);

        $comment->update([
            'content' => $request->get('content'),
            'validated' => $request->get('validated')
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Comemnt updated');
    }

    public function delete($id) {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted');
    }
}
