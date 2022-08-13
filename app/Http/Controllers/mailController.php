<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Company;
class mailController extends Controller
{
    public function mailform()
    {
        return view('mail/contact');
    }

    public function mailform2($id)
    {
        $companys = Company::find($id);
        return view('mail/contact2')
        ->with(['companys' => $companys]);
    }

    public function sendmail (Request $req)
    {

        $emails = [
        
            'email' => $req->get('email'),
        
            'cc' => $req->get('cc'),
        
            'bcc' => $req->get('bcc')
        ];
        
        $details = [
        
            'subject' => $req->get('subject'),
        
            'body' => $req->get('body')
        ];
        if($emails["cc"] =='' && $emails["bcc"] == ''){
        Mail::to($emails['email'])->send(new TestMail($details));
        return redirect("http://127.0.0.1:8000/sendSMS")->with('status', 'Email sent Successfully!'); 
        }

        elseif($emails["bcc"] =='')
        {
        Mail::to($emails['email'])->cc($emails['cc'])->send(new TestMail($details)); 
        return redirect("http://127.0.0.1:8000/sendSMS")->with('status', 'Email sent Successfully!');
        }
        else
        {
            Mail::to($emails['email'])->cc($emails['cc'])->bcc($emails['bcc'])->send(new TestMail($details));
            return redirect("http://127.0.0.1:8000/sendSMS")->with('status', 'Email sent Successfully!');
        }
    }

    public function sendmail2(Request $req, $cemail)
    {

        

        $emails = [
        
            'email' => ($cemail),
        
            'cc' => $req->get('cc'),
        
            'bcc' => $req->get('bcc')
        ];
        
        $details = [
        
            'subject' => $req->get('subject'),
        
            'body' => $req->get('body')
        ];
        if($emails["cc"] =='' && $emails["bcc"] == ''){
        Mail::to($emails['email'])->send(new TestMail($details));
        return redirect("/contact")->with('status', 'Email sent Successfully!'); 
        }

        elseif($emails["bcc"] =='')
        {
        Mail::to($emails['email'])->cc($emails['cc'])->send(new TestMail($details)); 
        return redirect("/contact")->with('status', 'Email sent Successfully!');
        }
        else
        {
            Mail::to($emails['email'])->cc($emails['cc'])->bcc($emails['bcc'])->send(new TestMail($details));
            return redirect("/contact")->with('status', 'Email sent Successfully!');
        }
    }

    public function index()
    {
        $receiverNumber = "+923190403610";
        $message = "This is an auto generated message";
  
        try {
  
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            dd('SMS Sent Successfully.');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}    
