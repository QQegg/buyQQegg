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
            'Store_id' => $id,
            'content' => $request['content'],
            'rate' => $request['rate'],
        ]);
        return redirect()->route('stodetail',$id);
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
