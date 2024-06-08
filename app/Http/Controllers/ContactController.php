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
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact_store(Request $request)
    {
        
        $contacts = new Contact();
        $contacts->User_id = auth()->id();
        // $user= $contacts::find(auth()->user()->id);
        $contacts -> name=$request->name;
        $contacts -> email=$request->email;
        $contacts -> subject=$request->subject;
        $contacts -> message=$request->message;

        // error handling
        $users = auth()->user();

        if (!$users) {
            // abort(403, 'Unauthorized');
            return redirect('/login');
        }

        $contacts->id = $users->id;

        if (!$users) {
                abort(404, 'User not found');
        }
        $contacts -> save();

        return redirect('/');
    }
    public function index()
    {
        $contacts = Contact::all();

        return redirect('showContacts');
    }
    public function showContacts()
    {
        $contacts = Contact::all();
        
        return view('admin.not', compact('contacts'));

    }
}
