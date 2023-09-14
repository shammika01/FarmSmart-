<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndCommentController extends Controller
{
    public function store(Request $request, $post_id)
    {
        $validatedData = $request->validate([
            'commentcontent' => 'required|string',

        ]);

        $user = Auth::user();


        $comment = new comment();
        $comment->post_id = $post_id;
        $comment->content = $validatedData['commentcontent'];
        $comment->save();


        return redirect()->back();
    }
}
