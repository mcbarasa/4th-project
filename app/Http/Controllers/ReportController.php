<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artist;
use App\Models\Promoter;
use App\Models\Contact;
use App\Models\Gig;
use App\Models\Comment;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function generate()
    {
        $usersCount = User::count();
        $gigsCount = Gig::count();
        $promotersCount = Promoter::count();
        $artistsCount = Artist::count();

        $artists = Artist::all();
        $contacts = Contact::all();
        $gigs = Gig::all();
        $promoters = Promoter::all();
        $users = User::all();

        return view('admin.report',[
            'usersCount' => $usersCount,
            'gigsCount' => $gigsCount,
            'promotersCount' => $promotersCount,
            'artistsCount' => $artistsCount,
            'artists'=> $artists,
            'contacts'=> $contacts,
            'gigs'=> $gigs,
            'promoters' => $promoters,
            'users' => $users,
        ]);
    }
}
