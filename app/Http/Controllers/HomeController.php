<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->updated==0){
            return view('pages.admins.updateAdmin');
        }else{
            return view('home');
        }

    }

    public function updateAdminInfo(Request $request)
    {
        if (Auth::user()->updated==0) {
            $admin = User::find($request->input('id'));
            $admin->title = $request->input('title');
            $admin->firstName = $request->input('firstName');
            $admin->lastName = $request->input('lastName');
            $admin->gender = $request->input('gender');
            $admin->dateOfBirth = $request->input('dateOfBirth');
            $admin->email = $request->input('email');
            $admin->phoneNumber = $request->input('phoneNumber');
            $admin->homeTown = $request->input('homeTown');
            $admin->region = $request->input('region');
            $admin->address = $request->input('address');
            $admin->houseNumber = $request->input('houseNumber');
            $admin->username = $request->input('username');
            $admin->password = Hash::make($request->input('password'));
            $admin->updated = 1;

            if ($admin->save()) {
                return redirect('/home')->with('update_success', 'Profile updated successfully');
            }
        }else{
            $admin =User::find($request->input('id'));
            $admin->title = $request->input('title');
            $admin->firstName = $request->input('firstName');
            $admin->lastName = $request->input('lastName');
            $admin->gender = $request->input('gender');
            $admin->dateOfBirth = $request->input('dateOfBirth');
            $admin->email = $request->input('email');
            $admin->phoneNumber = $request->input('phoneNumber');
            $admin->homeTown = $request->input('homeTown');
            $admin->region = $request->input('region');
            $admin->address = $request->input('address');
            $admin->houseNumber = $request->input('houseNumber');
            $admin->updated =1;

            if ($admin->save()) {
                return redirect('/home')->with('update_success', 'Profile updated successfully');
            }
        }

    }

    public function showAdminUpdateForm()
    {
        return view('pages.admins.updateAdmin');
    }

}
