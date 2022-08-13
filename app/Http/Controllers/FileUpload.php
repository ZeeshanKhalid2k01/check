<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\File;
class FileUpload extends Controller
{
  public function createForm(){
    return view('file/file-upload');
  }
  public function createFormofImg(){
    return view('file/file-uploadfrontpage');
  }
  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,docx,pdf|max:5000'
        ]);
        $fileModel = new File;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
            ->with('success','CV has been uploaded.')
            ->with('file', $fileName);
        }
   }
   public function imgUpload(Request $req){
    $req->validate([
    'file' => 'required|mimes:csv,txt,xlx,xls,docx,,png,jpg,jpeg,pdf|max:5000'
    ]);
    $fileModel = new File;
    if($req->file()) {
        $fileName = $req->file->getClientOriginalName();
        $filePath = $req->file('file')->storeAs('image', $fileName, 'public');
        $fileModel->name = $req->file->getClientOriginalName();
        $fileModel->file_path = '/public/' . $filePath;
        $fileModel->save();

        // $fileName = $req->file->getClientOriginalName();
        // $filePath = $req->file('file')->storeAs('public',$fileName);
        

        return back()
        ->with('success','image has been uploaded.')
        ->with('file', $fileName);
    }
}
}