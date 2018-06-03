<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\DB;
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
    public function destroy(Request $request, $id)
    {
        $whereArray = array('id' => $id);
        $whereArray2 = array('Member_id' => $id);
        $whereArray3 = array('Store_id' => $request['Store_id']);
        DB::table('comments')->where($whereArray)->delete();
        DB::table('comment_store')->where($whereArray2)->where($whereArray3)->delete();
        return redirect()->route('stodetail',$request['Store_id']);
    }
}
