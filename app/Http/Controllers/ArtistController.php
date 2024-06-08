<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Artist;
use App\Models\Promoter;
use App\Models\Gig;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Fan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtistController extends Controller
{
    public function artist_store(Request $request)
    {

        // checking if the artist is already registered
        $existingArtists = Artist::where('email', $request->email)->first();

        if ($existingArtists) {
            return response()->json(['error' => 'Email already registered'], 422);
        }

        $artist = new artist();
        $artist->user_id = auth()->id();
        $users= Artist::find(auth()->user()->id);
        $artist -> name=$request->name;
        $artist -> email=$request->email;
        $artist -> pho_no=$request->pho_no;
        $artist -> address=$request->address;
        $artist -> role=$request->role;
        $artist -> category=$request->category;
        $artist -> genre=$request->genre;

         //    Uploading Pictures
    if($request->hasfile('profile_picture')){
        $file = $request-> file('profile_picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/artist/', $filename);
        $artist->profile_picture= $filename;
    }
    else{
        return $request;
        $artists->profile_picture =  '';
    }
        $artist -> save();
        return redirect('showArtists');
    }
    public function show($id)
    {
		$artists = Artist::find($id);
		$users = User::find($id);
        return view('showArtists', compact('users', 'artists')) ;
        
    }
    public function showArtists()
{
    $artists = Artist::all();
    $artists = Artist::orderBy('id', 'desc')->get();
    return view('navs/art', compact( 'artists')); // Pass gigs data to the view
        
}
// function to artists to the admin page
public function index()
    {
        $artists = Artist::all();

        return redirect('showAdminArtists');
    }
    public function showAdminArtists()
    {
        $artists = Artist::all();
        
        return view('admin.ast', compact('artists'));

    }
    // end of the function artists to the admin
}
