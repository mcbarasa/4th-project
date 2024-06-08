<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Artist;
use App\Models\Promoter;
use App\Models\Gig;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Rating;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store_comment(Request $request)
    {
        $comments = new Comment();
        // $comments->user_id = auth()->id();
        $comments->comment = $request->comment;

        // error handling
        $users = auth()->user();

        if (!$users) {
            // abort(403, 'Unauthorized');
            return redirect('/login');
        }

        $comments->user_id = $users->id;

        if (!$users) {
                abort(404, 'User not found');
        }
        $comments->save();

        return redirect('/');
    }
    public function index()
    {
        $comments = Comment::all();

        return redirect('showComments')->with('message', 'Thank you for your feedback!');
    }
    public function showComments()
    {
        $comments = Comment::all();
        
        return view('admin.set', compact('comments'));
    }
}
