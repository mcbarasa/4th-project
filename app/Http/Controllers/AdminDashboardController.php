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

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('showDashboard');
        
    }
    public function showDashboard()
    {
        $totalArtists = Artist::count();
        $totalPrmoters = Promoter::count();
        $totalGigs = Gig::count();
        $totalContacts = Contact::count();

        // importing the date
        $todayDate = Carbon::now()->format('d-m-y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalAllUsers = User::count();
        // $totalUsers = User::where('role_as', '0')->count();
        // $totalAdmins = User::where('role_as', '1')->count();
        $totalUsers = User::whereDate('created_at', $todayDate)->count();
        $thisMonthUsers = User::whereMonth('created_at', $thisMonth)->count();
        $thisYearUsers = User::whereYear('created_at', $thisYear)->count();
        
        return view('admin.index', compact('totalArtists', 'totalPrmoters', 'totalGigs', 'totalAllUsers', 'totalUsers', 
                'totalUsers','thisMonthUsers', 'thisYearUsers', 'totalContacts'
            ));
    }
    public function gig_storeAdmin(Request $request)
    {
        
        $gigs = new Gig();
        $gigs->user_id = auth()->id();
        $users= $gigs::find(auth()->user()->id);
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
    return redirect('showAdminGigs');
    }
    // delete and destroy method

    public function destroy($id)
    {
        $gigs = Gig::findOrFail($id);
        $gigs->delete();

        return redirect('showAdminGigs')->with('success', 'Gig deleted successfully');
    }
    public function destroyArtist($id)
    {
        $artists = Artist::findOrFail($id);
        $artists->delete();

        return redirect('showAdminArtists')->with('success', 'Artist deleted successfully');
    }
    public function destroyPromoter($id)
    {
        $promoters = Promoter::findOrFail($id);
        $promoters->delete();

        return redirect('showAdminPromoters')->with('success', 'Promoters deleted successfully');
    }
    public function destroyContact($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();

        return redirect('/showcontacts')->with('success', 'Contact deleted successfully');
    }
    public function destroyComments($id)
    {
        $comments = Comment::findOrFail($id);
        $comments->delete();

        return redirect('/showComments');
    }
}
