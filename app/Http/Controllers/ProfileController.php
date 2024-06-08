<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Artist;
use App\Models\Promoter;
use App\Models\Gig;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class ProfileController extends Controller
{
    // profile
    public function index()
    {

        return redirect('showProfiles');
    }
    public function showProfiles()
    {
        $users = Auth::user();
        $authenticatedUser = Auth::user();
        $artists = $authenticatedUser->artists;
        $promoters = $authenticatedUser->promoters;
        $ratings = $authenticatedUser->ratings;

        return view('navs.prof', compact('users', 'artists', 'ratings', 'promoters'));

    }
    public function showPromProfiles()
    {
        $users = Auth::user();
        $authenticatedUser = Auth::user();

        // error handling for an authenticated users
        try {
            if ($authenticatedUser) {
                $artists = $authenticatedUser->artists;
                $promoters = $authenticatedUser->promoters;
                $ratings = $authenticatedUser->ratings;
            } else {
                // throw new \Exception("Authenticated user not found");
                return redirect('/login');
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return view('navs.prom_prof', compact('users', 'artists', 'ratings', 'promoters'));

    }
    
    public function showArtistProfiles()
    {
        $users = Auth::user();
        $authenticatedUser = Auth::user();

        try {
            if ($authenticatedUser) {
                $artists = $authenticatedUser->artists;
            } else {
                // throw new \Exception("Authenticated user not found");
                return redirect('/login');
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
        return view('/navs/art_rate', compact('users', 'artists'));

    }
    public function showPromoterProfiles()
    {
        $users = Auth::user();
        $authenticatedUser = Auth::user();
        $promoters = $authenticatedUser->promoters;
        $ratings = $authenticatedUser->ratings;
        
        return view('/navs/prom_rate', compact('users', 'promoters', 'ratings'));
    }
}
