<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    // AdminDestroy
    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return redirect('/'); //home page
        return redirect('/logout'); //login page
    }

    // AdminLogoutPage
    public function AdminLogoutPage(){
       return view('admin.admin_logout');
    }

    // AdminProfile
    public function AdminProfile(){

        // Para saber que usuario esta logueado
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    }

    

}
