<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function create() {
        return view ("company/create");
    }
       
    public function store(Request $request) {
 
        $company = new Company; // Must import the Model file: use App\Student;
        $company->cname = $request->get('cname');
        $company->cemail = $request->get('cemail');
        $company->designation = $request->get('designation');
        $company->jobtype = $request->get('jobtype');
        $company->province = $request->get('province');
        $company->salary = $request->get('salary');
 

        $company->save(); 
        return redirect('company/create')
        ->with('status', 'COMPANY '.$company->cname.'  data has added Successfully!');
        // --------------------------------------
    }

    public function read() {
        $companys = Company::all(); // Load students using the model ‘Student'
        
        return view('company/read')
            ->with(['companys' => $companys]);
    }

    public function readonly() {
        $companys = Company::all(); // Load students using the model ‘Student'
        
        return view('company/readonly')
            ->with(['companys' => $companys]);
    }
    public function edit($id) { 
 
        $companys = Company::find($id); 
        return view('company/update')
        ->with(['companys' => $companys]);

    }
    public function update(Request $request, $id) {
 
        // Locate the row of this CNIC so that updated record
        // can be overwritten ONLY on the previous record of this CNIC.
        $company = Company::find($id);
        
        
        $company->cname = $request->get('cname');
        $company->cemail = $request->get('cemail');
        $company->designation = $request->get('designation');
        $company->jobtype = $request->get('jobtype');
        $company->province = $request->get('province');
        $company->salary = $request->get('salary');
        $company->save();
        return redirect('company/read')
            ->with('status', 'ID '.$id.' updated Successfully!');
    }
    public function delete($id) { 
        Company::destroy($id);
        return redirect('company/read')->with('status', 'ID '.$id.' deleted Successfully!');
    }
       

       
}
