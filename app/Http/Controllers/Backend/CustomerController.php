<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class CustomerController extends Controller
{
    
    // CustomerList
    public function CustomerList(){
        $customer = Customer::latest()->get();
        return view('backend.customer.all_customer', compact('customer'));
    }    

    // CustomerAdd
    public function CustomerAdd(){
        return view('backend.customer.add_customer');
    }

    // CustomerStore
    public function CustomerStore(Request $request){

        $validateData = $request->validate(
            [
                'name' => 'required|max:200',
                'email' => 'required|unique:customers|max:200',
                'phone' => 'required|max:200',
                'address' => 'required|max:400',
                'shopname' => 'required|max:200',
                'account_holder' => 'required|max:200',
                'account_number' => 'required|max:200',
                'bank_name' => 'required|max:200',
                'bank_branch' => 'required|max:200',
                'city' => 'required|max:200',
                'image' => 'required',
            ],

            [
                'name.required' => 'El nombre es requerido',
                'email.required' => 'El correo es requerido',
                'phone.required' => 'El teléfono es requerido',
                'address.required' => 'La dirección es requerida',
                'shopname.required' => 'La Tienda es requerida',
                'account_holder.required' => 'Cuenta de cliente es requerida',
                'account_number.required' => 'El numero de cuenta es requerida',
                'bank_name.required' => 'Nombre del Banco es requerida',
                'bank_branch.required' => 'Sucursal del Banco es requerida',
                'city.required' => 'La ciudad es requerida',
                'image.required' => 'La imagen es requerida',
            ]
        );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/customer/' . $name_gen);
        $save_url = 'upload/customer/' . $name_gen;

        Customer::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

            'shopname' => $request->shopname,
            'account_holder' => $request->account_holder,
            'account_number' => $request->account_number,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,

            'city' => $request->city,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Cliente Registrado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->route('all.customer')->with($notification);

    }




}
