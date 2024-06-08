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

class PromoterController extends Controller
{
    public function promoter_store(Request $request)
    {
        // checking if the promoter is already registered
        $existingPromoters = Promoter::where('email', $request->email)->first();

        if ($existingPromoters) {
            return response()->json(['error' => 'Email already registered'], 422);
        }

        $promoters = new promoter();
        $promoters->user_id = auth()->id();
        $user= $promoters::find(auth()->user()->id);
        $promoters -> name=$request->name;
        $promoters -> email=$request->email;
        $promoters -> pho_no=$request->pho_no;
        $promoters -> address=$request->address;
        $promoters -> organization=$request->organization;

         //Uploading Pictures
    if($request->hasfile('profile_picture')){
        $file = $request-> file('profile_picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/promoter/', $filename);
        $promoters->profile_picture= $filename;
    }
    else{
        return $request;
        $promoters->profile_picture =  '';
    }
        $promoters -> save();
        return redirect('showPromoters');
    }
    public function showPromoters()
    {
        $promoters = Promoter::all(); 
        $promoters = Promoter::orderBy('id', 'desc')->get();
        return view('navs/prom', compact('promoters')); 
    }
    // function to show promoters to the admin page
public function index()
{

    return redirect('showAdminPromoters');
}
public function showAdminPromoters()
{
    $promoters = Promoter::all();
    
    return view('admin.content', compact('promoters'));

}
// end of the function promoters to the admin
}
