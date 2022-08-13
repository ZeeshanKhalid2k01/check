<?php

namespace App\Http\Controllers;




use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class general extends Controller
{
    public function sms() {
        return view ("sms/sucess");
    }
    public function adminpanel() {
        return view ("/adminpanel");
    }
    public function terms() {
        return view ("/termsandconditions");
    }
    public function aboutus() {
        return view ("/aboutus");
    }
    public function privacypolicy() {
        return view ("/privacypolicy");
    }
    public function contactus() {
        return view ("/contactus");
    }
    public function confirm()
    {
        return view('confirm');
    }
    // public function mailform()
    // {
    //     return view('mail/contact');
    // }
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
}
