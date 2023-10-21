<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    // AdminDestroy
    public function AdminDestroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return redirect('/'); //home page
        return redirect('/logout'); //login page
    }

    // AdminLogoutPage
    public function AdminLogoutPage()
    {
        return view('admin.admin_logout');
    }

    // AdminProfile
    public function AdminProfile()
    {

        // Para saber que usuario esta logueado
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    }

    // AdminProfileStore
    public function AdminProfileStore(Request $request)
    {

        // Para saber que usuario esta logueado
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        // actualizar imagen
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Perfil actualizado con éxito',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
