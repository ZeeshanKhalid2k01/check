<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Listsemployee;
use App\Models\Employee;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ListsemployeeController extends Controller
{
    public function read() {
        $listsemployees = Listsemployee::all(); // Load students using the model ‘Student'
        $employees = Employee::all();
        // Pass the $students to the view, 'student/read'
        return view('listsemployee/read')
            ->with(['listsemployees' => $listsemployees])
            ->with(['employees' => $employees]);
    }

    public function save($id)
    {
        // $x = Company::find($id); 
        $employees = Employee::find($id);
        
        return view('listsemployee/apply')
        ->with(['employees' => $employees]);
    }

    public function mailform()
    {
        return view('mail/contact');
    }

    public function sendmail (Request $req)
    {
        $listsemployees = new Listsemployee;

        

         

        $emails = [
        
            'email'  => $req->get('email'),
        
            'cc' => $req->get('cc'),
        
            'bcc' => $req->get('bcc')
        ];
        
        $details = [
        
            'subject' => $req->get('subject'),
        
            'body' => $req->get('body')
        ];
        if($emails["cc"] =='' && $emails["bcc"] == ''){
        // $listsemployees->id=  "NIL";
        $listsemployees->email = $req->get('email');
        $listsemployees->cc =  "NIL";
        $listsemployees->bcc = "NIL";
        $listsemployees->subject = $req->get('subject');
        $listsemployees->body = $req->get('body');
        $listsemployees->empname = $req->get('employee_name');
        $listsemployees->employee_id = $req->get('employee_id');
        $listsemployees->save();

        Mail::to($emails['email'])->send(new TestMail($details));
        return redirect("listsemployee/read")->with('status', 'Email sent Successfully!'); 
        }

        elseif($emails["bcc"] =='')
        {
            $listsemployees->email = $req->get('email');
            $listsemployees->cc = $req->get('cc');
            $listsemployees->bcc = "NIL";
            $listsemployees->subject = $req->get('subject');
            $listsemployees->body = $req->get('body');
            $listsemployees->empname = $req->get('employee_name');
            $listsemployees->employee_id = $req->get('employee_id');

            $listsemployees->save();



        Mail::to($emails['email'])->cc($emails['cc'])->send(new TestMail($details)); 
        return redirect("listsemployee/read")->with('status', 'Email sent Successfully!');
        }
        else
        {
            $listsemployees->email = $req->get('email');
            $listsemployees->cc = $req->get('cc');
            $listsemployees->bcc = $req->get('bcc');
            $listsemployees->subject = $req->get('subject');
            $listsemployees->body = $req->get('body');
            $listsemployees->empname = $req->get('employee_name');
            $listsemployees->employee_id = $req->get('employee_id');

            $listsemployees->save();

            Mail::to($emails['email'])->cc($emails['cc'])->bcc($emails['bcc'])->send(new TestMail($details));
            return redirect("listsemployee/read")->with('status', 'Email sent Successfully!');
        }
    }

    public function admin() {
        $listsemployees = Listsemployee::all(); // Load students using the model ‘Student'
        


        
        return view('listsemployee/admin')
            ->with(['listsemployees' => $listsemployees]);
    }

    public function edit($id) { 
 
        $listsemployees = Listsemployee::find($id); 
        $employees = Employee::all();
        return view('listsemployee/update')
        ->with(['listsemployees' => $listsemployees])
        ->with(['employees' => $employees]);


    }
    public function update(Request $request, $id) {
 
        // Locate the row of this CNIC so that updated record
        // can be overwritten ONLY on the previous record of this CNIC.


        // $table->id();
        //     $table->string('email',100);
        //     $table->string('cc',100);
        //     $table->string('bcc',100);
        //     $table->string('subject',100);
        //     $table->string('body',250);
        //     $table->string('empname',250);
        //     // $table->string('empid',250);


        //     $table->unsignedbiginteger('employee_id');
        //     $table->foreign('employee_id')->references('id')->on('employees')
        //     ->onDelete('cascade');

        $listsemployees = Listsemployee::find($id);
        
        
        $listsemployees->id = $request->get('id');
        $listsemployees->email = $request->get('email');
        $listsemployees->cc = $request->get('cc');
        $listsemployees->bcc = $request->get('bcc');
        $listsemployees->subject = $request->get('subject');
        $listsemployees->body = $request->get('body');
        $listsemployees->empname = $request->get('employee_name');
        $listsemployees->employee_id = $request->get('employee_id');
        $listsemployees->save();
        return redirect('listsemployee/admin')
            ->with('status', 'ID '.$id.' updated Successfully!');
    }
    public function delete($id) { 
        Listsemployee::destroy($id);
        return redirect('listsemployee/admin')->with('status', 'ID '.$id.' deleted Successfully!');
    }

}
