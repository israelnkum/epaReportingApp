<?php

namespace App\Http\Controllers;


use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       if (Auth::user()->updated==0){
           return view('pages.admins.updateSuperAdmin');
       }else{
           return view('home');
       }
    }


    public function allAdmin()
    {
        $allAdmin = User::all();
        $allSuperAdmin = Admin::all();
        return view('pages.admins.allAdmin')
            ->with('allAdmin',$allAdmin)
            ->with('allSuperAdmin',$allSuperAdmin);
    }
    public function newAdmin()
    {
        $allAdmin = User::all();
        return view('pages.admins.newAdmin')->with('allAdmin',$allAdmin);
    }

    public function newSuperAdmin()
    {
        $allSuperAdmin = Admin::all();

        return view('pages.admins.newSuperAdmin')->with('allSuperAdmin',$allSuperAdmin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSuperAdmin(Request $request)
    {

        // create post
        $admin = new Admin;
        $admin->username = $request->input('username');
        $admin->phoneNumber = $request->input('phoneNumber');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('username'));
        //$post->author = auth()->user()->name;
        $admin->save();

        return redirect('admin/newSuperAdmin')->with('success','New Super Admin Created');

    }


    public function storeAdmin(Request $request)
    {

        // create post
        $admin = new User;
        $admin->username = $request->input('username');
        $admin->phoneNumber = $request->input('phoneNumber');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('username'));
        //$post->author = auth()->user()->name;
        $admin->save();

        return redirect('admin/newAdmin')->with('success','New Admin Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAdminDetails($id,$userType)
    {
        if ($userType=='admin'){
            $adminDetail = Admin::find($id);
        }else{
            $adminDetail = User::find($id);
        }


       return view('pages.admins.showAdminDetails')->with('adminDetail',$adminDetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSuperAdminUpdateForm()
    {
        return view('pages.admins.updateSuperAdmin');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSuperAdminInfo(Request $request)
    {


        if (Auth::user()->updated==0) {
            $admin = Admin::find($request->input('id'));
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
                return redirect('/admin')->with('update_success', 'Profile updated successfully');
            }
        }else{
            $admin =Admin::find($request->input('id'));
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
                return redirect('/admin')->with('update_success', 'Profile updated successfully');
            }
        }

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAdmin($id,$userType)
    {
        if ($userType=='admin'){
            $admin = Admin::find($id);
        }else{
            $admin = User::find($id);
        }

        $admin->delete();
        return redirect('/admin/allAdmin')->with('success','Deleted');

    }
}
