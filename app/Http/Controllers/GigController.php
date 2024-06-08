<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Promoter;
use App\Models\Gig;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Fan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GigController extends Controller
{
    public function gig_store(Request $request)
    {
        
        $gigs = new Gig();
        $gigs->user_id = auth()->id();
        // $users= $gigs::find(auth()->user()->id);

        // error handling
        $users = auth()->user();

        if (!$users) {
            abort(403, 'Unauthorized');
        }

        // $users = $gigs->find($users->id);
        $gigs->user_id = $users->id;

        if (!$users) {
                // abort(404, 'User not found');
                return redirect('/login');
        }

        $gigs -> title=$request->title;
        $gigs -> date=$request->date;
        $gigs -> time=$request->time;
        $gigs -> genre=$request->genre;
        $gigs -> location=$request->location;
        $gigs -> description=$request->description;
        $gigs -> attire=$request->attire;
        $gigs -> add_info=$request->add_info;
        $gigs -> experience=$request->experience;
        $gigs -> instrument=$request->instrument;

        //    Uploading Pictures
    if($request->hasfile('poster_picture')){
        $file = $request-> file('poster_picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/gig/', $filename);
        $gigs->poster_picture= $filename;
    }
    else{
        return $request;
        $gigs->poster_picture =  '';
    }
        $gigs -> save();
        return redirect('showGigs');
    }
    public function showGigs()
{
    $gigs = Gig::all(); // Fetch gigs data from the database
    $gigs = Gig::orderBy('id', 'desc')->get();
    return view('navs/gig', compact('gigs'));
}
public function showMore()
{
    // $gigs = Gig::all($id);
    $gigs = Gig::all();
    return view('navs/req', compact('gigs'));
}
// function to showGigs to the admin page
public function index()
    {
        $gigs = Gig::all();

        return redirect('showAdminGigs');
    }
    public function showAdminGigs()
    {
        $gigs = Gig::all();
        
        return view('admin.gig', compact('gigs'));

    }
}
