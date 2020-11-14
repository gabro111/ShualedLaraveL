<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{

    public function employeeAdd(Request $request)
    {
        $employee = new employee();
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->birthdate = $request->birthdate;
        $employee->personal_id = $request->personal_id;
        $employee->salary = $request->salary;
        $employee->save();
        return redirect('/company/adder');
    }
    public function employeeDelete(Request $request)
    {
        employee::where('id',$request->id)->delete();
        return redirect('/listAll');
    }
    public function openIndivEdit(Request $request)
    {
        $employee = employee::where('id',$request->id)->first();
        return view('editemployee')->with('employee',$employee);
    }
    public function updateemployee(Request $request)
    {
        employee::where('id',$request->id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
        ]);
        return redirect('/listAll');
    }
    
}
