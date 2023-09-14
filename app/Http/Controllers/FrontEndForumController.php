<?php

namespace App\Http\Controllers;

use App\Models\forum;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FrontEndForumController extends Controller
{
    public function index()
    {

        $forumPosts = forum::all();
        return view('forum.index', ['forumPosts' => $forumPosts]);
    }

    public function store(Request $request)
    {

        // Validate the form data
        $validatedData = $request->validate([
            'topic' => 'required|string',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);

        // Get the currently authenticated user
        $user = Auth::user();
        $image = $request->file('image');

        if ($request->hasFile('image')) {
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            // Store the image in the storage/app/public directory
            $image->storeAs('public', $filename);
        }


        // Create a new forum post with the user's information
        $forumPost = new forum();
        $forumPost->user_id = Auth::user()->id;
        $forumPost->user_name = $user->name;
        $forumPost->topic = $validatedData['topic'];
        $forumPost->content = $validatedData['content'];
        $forumPost->image = $filename;

        // Save the forum post
        $forumPost->save();

        // Redirect or return a response as needed
        // For example, redirect to the forum post or a different page
        return redirect()->route('forum');
    }
}
