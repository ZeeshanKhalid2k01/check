<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listscompany;
use App\Models\Company;



use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ListscompanyController extends Controller
{
    public function read() {
        $listscompanys = Listscompany::all(); // Load students using the model ‘Student'
        $companys = Company::all();
        // Pass the $students to the view, 'student/read'
        return view('listscompany/read')
            ->with(['listscompanys' => $listscompanys])
            ->with(['companys' => $companys]);
    }
    // private $x;
    public function save($id)
    {
        // $x = Company::find($id); 
        $companys = Company::find($id);
        return view('listscompany/apply')
        ->with(['companys' => $companys]);
    }

    public function mailform()
    {
        return view('mail/contact');
    }

    // public function mailform2($id)
    // 
    //     $companys = Company::find($id);
    //     return view('listscompany/apply')
    //     ->with(['companys' => $companys]);
    // }

    public function sendmail (Request $req)
    {
        $listscompany = new Listscompany;

        

         

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
        // $listscompany->id=  "NIL";
        $listscompany->cc =  "NIL";
        $listscompany->bcc = "NIL";
        $listscompany->email = $req->get('email');
        $listscompany->subject = $req->get('subject');
        $listscompany->body = $req->get('body');
        $listscompany->company_id = $req->get('company_id');
        $listscompany->save();

        Mail::to($emails['email'])->send(new TestMail($details));
        return redirect("listscompany/read")->with('status', 'Email sent Successfully!'); 
        }

        elseif($emails["bcc"] =='')
        {
            $listscompany->email = $req->get('email');
            $listscompany->cc = $req->get('cc');
            $listscompany->bcc = "NIL";
            $listscompany->subject = $req->get('subject');
            $listscompany->body = $req->get('body');
            $listscompany->company_id = $req->get('company_id');

            $listscompany->save();



        Mail::to($emails['email'])->cc($emails['cc'])->send(new TestMail($details)); 
        return redirect("listscompany/read")->with('status', 'Email sent Successfully!');
        }
        else
        {
            $listscompany->email = $req->get('email');
            $listscompany->cc = $req->get('cc');
            $listscompany->bcc = $req->get('bcc');
            $listscompany->subject = $req->get('subject');
            $listscompany->body = $req->get('body');
            $listscompany->company_id = $req->get('company_id');

            $listscompany->save();

            Mail::to($emails['email'])->cc($emails['cc'])->bcc($emails['bcc'])->send(new TestMail($details));
            return redirect("listscompany/read")->with('status', 'Email sent Successfully!');
        }
    }


    public function admin() {
        $listscompanys = Listscompany::all(); // Load students using the model ‘Student'
        


        
        return view('listscompany/admin')
            ->with(['listscompanys' => $listscompanys]);
    }

    public function edit($id) { 
 
        $listscompanys = Listscompany::find($id); 
        $companys = Company::all();
        return view('listscompany/update')
        ->with(['listscompanys' => $listscompanys])
        ->with(['companys' => $companys]);


    }
    public function update(Request $request, $id) {
 
        // Locate the row of this CNIC so that updated record
        // can be overwritten ONLY on the previous record of this CNIC.


        // $table->id();
        // $table->string('email',100);
        // $table->string('cc',100);
        // $table->string('bcc',100);
        // $table->string('subject',100);
        // $table->string('body',250);


        // $table->unsignedbiginteger('company_id');
        // $table->foreign('company_id')->references('id')->on('companies')
        // ->onDelete('cascade');

        $listscompanys = Listscompany::find($id);
        
        
        $listscompanys->email = $request->get('email');
        $listscompanys->cc = $request->get('cc');
        $listscompanys->bcc = $request->get('bcc');
        $listscompanys->email = $request->get('email');
        $listscompanys->subject = $request->get('subject');
        $listscompanys->body = $request->get('body');
        $listscompanys->company_id = $request->get('company_id');
        $listscompanys->save();
        return redirect('listscompany/admin')
            ->with('status', 'ID '.$id.' updated Successfully!');
    }
    public function delete($id) { 
        Listscompany::destroy($id);
        return redirect('listscompany/admin')->with('status', 'ID '.$id.' deleted Successfully!');
    }


}
