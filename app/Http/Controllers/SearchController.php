<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Promoter;
use App\Models\Gig;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Rating;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $artists = Artist::where('name','like', '%'.$query.'%')
                    ->orWhere('address', 'like', '%'.$query.'%')
                    ->orWhere('category', 'like', '%'.$query.'%')
                    ->orWhere('genre', 'like', '%'.$query.'%')
                    ->orWhere('role', 'like', '%'.$query.'%')
                    ->get();


        $promoters = Promoter::where('name', 'like', '%'.$query.'%')
                    ->orWhere('address', 'like', '%'.$query.'%')
                    ->orWhere('organization', 'like', '%'.$query.'%')
                    ->get();

        $gigs = Gig::where('location', 'like', '%'.$query.'%')
                ->orWhere('genre', 'like', '%'.$query.'%')
                ->orWhere('instrument', 'like', '%'.$query.'%')
                ->orWhere('experience', 'like', '%'.$query.'%')
                ->orWhere('time', 'like', '%'.$query.'%')
                ->orWhere('description', 'like', '%'.$query.'%')
                ->orWhere('attire', 'like', '%'.$query.'%')
                ->get();

        return view('navs.results', compact('artists', 'promoters', 'gigs'));
    }
}
