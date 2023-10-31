<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AdvanceSalary;
use App\Models\Employee;
use Carbon\Carbon;

class SalaryController extends Controller
{
    // AddAdvanceSalary
    public function AddAdvanceSalary(){
        $employee = Employee::latest()->get();
        return view('backend.salary.add_advance_salary',compact('employee'));
    }

    // AdvanceSalaryStore
    public function AdvanceSalaryStore(Request $request){

        $validateData = $request->validate(
            [
                'employee_id' => 'required',
                'month' => 'required',
                'year' => 'required',
                'advance_salary' => 'required|numeric|max:1000000',
            ],

            [
                'employee_id.required' => 'El empleado es requerido',
                'month.required' => 'El mes es requerido',
                'year.required' => 'El año es requerido',
                'advance_salary.required' => 'El salario es requerido',
            ]
        );

        $month = $request->month;
        $employee_id = $request->employee_id;

        $advanced = AdvanceSalary::where('month',$month)->where('employee_id',$employee_id)->first();

        if ($advanced === NULL) {

            AdvanceSalary::insert([
                'employee_id' => $request->employee_id,
                'month' => $request->month,
                'year' => $request->year,
                'advance_salary' => $request->advance_salary,
                'created_at' => Carbon::now(), 
            ]);

         $notification = array(
            'message' => 'Salario Avanzado Agregado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 


        } else{

             $notification = array(
            'message' => 'Salario Avanzado ya existe',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification); 

        }

    }





}
