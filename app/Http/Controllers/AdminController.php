<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

}
