<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\FileUpload;

class EmployeeController extends Controller
{
    public function create() {
        return view ("employee/create");
    }

    public function create2() {
        return view ('employee/create');
    }
       
    public function store(Request $request) {
 
        $employee = new Employee; // Must import the Model file: use App\Student;
        $employee->name = $request->get('name');
        $employee->age = $request->get('age');
        $employee->phoneNO = $request->get('phoneNO');
        $employee->email = $request->get('email');
        $employee->city = $request->get('city');
        $employee->province = $request->get('province');
        $employee->expertise = $request->get('expertise');
        $employee->experience = $request->get('experience');

        $employee->save(); 
        return redirect('employee/create')
        ->with('status', 'NAME: '.$employee->name.' your data is added Successfully!');
        // --------------------------------------
    }



    public function read() {
        $employees = Employee::all(); // Load students using the model ‘Student'
        
        return view('employee/read')
            ->with(['employees' => $employees]);
    }

    public function readonly() {
        $employees = Employee::all(); // Load students using the model ‘Student'
        
        return view('employee/readonly')
            ->with(['employees' => $employees]);
    }
    public function edit($id) { 
 
        $employees = Employee::find($id); 
        return view('employee/update')
        ->with(['employees' => $employees]);

    }
    public function update(Request $request, $id) {
 
        // Locate the row of this CNIC so that updated record
        // can be overwritten ONLY on the previous record of this CNIC.
        $employee = Employee::find($id);
        
        
        $employee->name = $request->get('name');
        $employee->age = $request->get('age');
        $employee->phoneNO = $request->get('phoneNO');
        $employee->email = $request->get('email');
        $employee->city = $request->get('city');
        $employee->province = $request->get('province');
        $employee->expertise = $request->get('expertise');
        $employee->experience = $request->get('experience');
        $employee->save();
        return redirect('employee/read')
            ->with('status', 'ID '.$id.' updated Successfully!');
    }
    public function delete($id) { 
        Employee::destroy($id);
        return redirect('employee/read')->with('status', 'ID '.$id.' deleted Successfully!');
    }
       

       
}
