<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Biodata;
use App\Business;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = DB::table('users')
                    ->leftJoin('biodatas', 'biodatas.user_id', '=', 'users.id')
                    ->leftJoin('businesses', 'businesses.user_id', '=', 'users.id')
                    ->select('users.name', 'users.email', 'users.role', 'biodatas.*', 'businesses.*', 'businesses.address as office_address')
                    ->where('users.id', '=', $user_id)
                    ->first();
        if (isset($user->gender) && isset($user->nin_number) && isset($user->address)) {
            return view('home');
        } else {
            if ($user->role == 1) {
                return view('home');
            } else {
                return redirect()->route('profile.edit')->with('error', 'Update your profile to continue');
            }
        }
    }

    public function edit()
    {
        $user_id = Auth::user()->id;
        $user = DB::table('users')
                    ->leftJoin('biodatas', 'biodatas.user_id', '=', 'users.id')
                    ->leftJoin('businesses', 'businesses.user_id', '=', 'users.id')
                    ->select('users.name', 'users.email', 'biodatas.*', 'businesses.*', 'businesses.address as office_address')
                    ->where('users.id', '=', $user_id)
                    ->first();
       //dd($user);
        return view('profile.edit', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'gender' => 'required',
            'nin_number' => 'required|numeric',
            'address' => 'required|string',
            'phone' => 'required|string',
            'company_name' => 'required|string',
            'office_address' => 'required|string',
            'office_phone' => 'required|string',
            'type_of_business' => 'required|string',
            'rc_number' => 'required|string'
        ]);
        $user_id = Auth::user()->id;
        Biodata::where('user_id', $user_id)->update([
            'gender' => $request->gender,
            'nin_number' => $request->nin_number,
            'address' => $request->address,
            'phone' => $request->phone
        ]);
        Business::where('user_id', $user_id)->update([
            'company_name' => $request->company_name, 
            'address' => $request->address,  
            'office_phone' => $request->office_phone, 
            'type_of_business' => $request->type_of_business, 
            'rc_number' => $request->rc_number
        ]);
        return redirect()->route('home')->with('success', 'Profile Updated');
    }
    public function profile()
    {
        $user_id = Auth::user()->id;
        $user = DB::table('users')
                    ->leftJoin('biodatas', 'biodatas.user_id', '=', 'users.id')
                    ->leftJoin('businesses', 'businesses.user_id', '=', 'users.id')
                    ->select('users.name', 'users.email', 'biodatas.*', 'businesses.*', 'businesses.address as office_address')
                    ->where('users.id', '=', $user_id)
                    ->first();
        return view('profile.show', compact('user'));
    }

    public function users()
    {
        $users = DB::table('users')
                    ->leftJoin('businesses', 'businesses.user_id', '=', 'users.id')
                    ->select('users.name', 'users.id', 'users.email', 'businesses.office_phone', 'businesses.company_name', 'users.approved')
                    ->where('users.role', 2)
                    ->get();
        return view('user.index', compact('users'));
    }
    public function user($id)
    {
        $user = DB::table('users')
                    ->leftJoin('biodatas', 'biodatas.user_id', '=', 'users.id')
                    ->leftJoin('businesses', 'businesses.user_id', '=', 'users.id')
                    ->select('users.name', 'users.email', 'biodatas.*', 'businesses.*', 'businesses.address as office_address')
                    ->where('users.id', '=', $id)
                    ->first();
        return view('user.user', compact('user'));
    }
}
