<?php

namespace App\Http\Controllers;
use App\Models\company;
use App\Models\employee;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function companyAdder(){
        return view('addnewcompany');
    }
    public function companyAdd(Request $request){
        $company = new company();
        $company->name = $request->name;
        $company->code = $request->code;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->country = $request->country;
        $company->save();
        return redirect('/company/adder');

    }
    public function listAll()
    {
        $employees = employee::all();
        $companies = company::all();
        return view('listAll')->with('employees',$employees)->with('companies',$companies);
    }
    public function companyDelete(Request $request)
    {
        company::where('id',$request->id)->delete();
        return redirect('/listAll');
    }
    public function openIndivEdit(Request $request)
    {
        $companies = company::where('id',$request->id)->first();
        return view('editcompany')->with('companies',$companies);
    }
    public function updateCompany(Request $request)
    {
        company::where('id',$request->id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ]);
        return redirect('/listAll');
    }
}
