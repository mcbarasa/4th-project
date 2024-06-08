<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Promoter;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Rating;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    public function store_rating(Request $request)
    {
        // Validate request data
        $ratings = new Rating();
        $ratings->user_id = auth()->id(); 
        $ratings->feedback = $request->feedback;
        $ratings->rating = $request->rating;
        $ratings->save();


        return redirect('showProfiles');
    }
    public function store_ratingPromoter(Request $request)
    {
        $ratings = new Rating();
        $ratings->user_id = auth()->id(); 
        $ratings->feedback = $request->feedback;
        $ratings->rating = $request->rating;
        $ratings->save();
        
        return redirect('/showPromProfiles');
    }
}
