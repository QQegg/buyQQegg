<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
    }
    public function store(Request $request,$id)
    {
        Comment::create([
            'Member_id' => $id,
            'Store_id' => $request['Store_id'],
            'content' => $request['content'],
            'rate' => $request['rating'],
        ]);
        return redirect()->route('stodetail',$request['Store_id']);
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
