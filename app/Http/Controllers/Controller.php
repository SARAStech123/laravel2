<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\File;
use App\Models\Image;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
//use App\Mail\SchoolMail;
//use Illuminate\Support\Facades\Mail;
//use Mail;
use App\Models\school;
use Illuminate\Support\Facades\Storage;





class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        public function index()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        User::create([
        'FName' => request('FName'),
        'LName' => request('LName'),
        'Class' => request('Class'),
        'Email' => request('Email'),
        'Password' => request('Password'),
        'roll' => request('roll'),
        'SName' => request('SName'),
        'SEmail' => request('SEmail'),
        'SPassword' => request('SPassword'),
        'roll2' => request('roll2'),
        'approved' => request('approved')
    ]);
        $data = $request->input('FName');
        $request->session()->put('FName',$data);
    return redirect('message');
    }
    // for show details on public page
    public function show()
    {
        $data = User::all();
        return view('public',['users' =>$data]);
    }

    // for show details on fetchData page
    public function fetchData(Request $request)
    {
        $schoolName = $request->input('school');
        $data = school::where('schoolname','=' ,$request->school)->first();

            if (!$data) {
        // Handle the case when the school is not found
        return back()->with('error', 'Details are not uploaded');
    }
               
        return view('fetch-data',['schools' =>$data]);
    }

    // show name on signin logo
    public function name()
    {
        $data = User::all();
        return view('Dashboard',['users' =>$data]);
    }

        public function admin()
    {
        $admin = school::all();
        //return view('admin', compact('schools'));
        return view('admin',['schools' =>$admin]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $results = User::where('SName', 'LIKE', '%' . $keyword . '%')->get(); // Replace column_name with the actual column name in your table

        return view('public', ['users' => $results]);
    }

    // 1st file download
      public function download($id)
{
    
    $user = DB::table('schools')->where('id',$id)->first();
    $filepath = storage_path("app/public/upload/{$user->Director_of_Education_Certificate}");
    return \Response::download($filepath);
}

    
public function files($id)
{
    $user = DB::table('schools')->where('id', $id)->first();

        $filepath= storage_path("app/public/upload/{$user->Plot_Ownership_Govt}");
        
        
        
   //     return $filepath;    
   return \Response::download($filepath);




}


public function file($id)
{
    $user = DB::table('schools')->where('id', $id)->first();

        $filepath= storage_path("app/public/upload/{$user->Registration_letter_of_the_organization}");
        
        
        
   //     return $filepath;    
   return \Response::download($filepath);




}


public function down($id)
{
    $user = DB::table('schools')->where('id', $id)->first();

        $filepath= storage_path("app/public/upload/{$user->Education_Sub_Inspector_First_Sanction_Order}");
        
        
        
   //     return $filepath;    
   return \Response::download($filepath);




}


public function downloadFile($id)
{
    $user = DB::table('schools')->where('id', $id)->first();

        $filepath= storage_path("app/public/upload/{$user->Government_approval_order}");
        
        
        
        //return $filepath;    
    return \Response::download($filepath);




}

/*
public function upload(Request $request)
    {
        if ($request->hasFile('file')) 
        {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $path = $file->store('files');

            File::create([
                'filename' => $filename,
                'path' => $path
            ]);

            return redirect('/index')->with('success', 'File uploaded successfully.');
        }

       // return redirect('/index')->with('fail', 'No file selected.');
        return 'No file selected.';
    }*/




   /* public function fileUpload(Request $request)
    {
        $fileNames = [];
        
            $imageName = $image->getClientOriginalName();
            $image->move(public_path().'/images/',$imageName);
            $fileNames[] = $imageName;

        $images = json_encode($fileNames);
        Image::create(['images'=>$images]);
        return back();
    }
*/


 /*public function upload(Request $request)
    {
        $file = $request->file('file');

        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Example validation rules
        ]);

        // Move the uploaded file to a directory
        $file->move(public_path('uploads'), $file->getClientOriginalName());

        // Do additional processing if needed

        return redirect('/upload')->with('success', 'File uploaded successfully.');
    }

*/



        public function login(Request $request)
    {
        //$name = $request->input('FName');
        $pass = User::where('Password','=' ,$request->Password)->first();
        $user = User::where('Email','=' ,$request->Email)->first();
        if ($user && $pass) {
                $data = $request->input('Email');
                //$name = $request->input('FName');
                $request->session()->put('Email',$data);
                $name=$user->FName;
                Session()->put('AN',$name);
                return redirect("Dashboard");
        }else{
            return view('signin');
        }

    }

    public function scllogin(Request $request)
    {
        $pass = User::where('SPassword','=' ,$request->SPassword)->first();
        $user = User::where('SEmail','=' ,$request->SEmail)->first();
        if ($user && $pass) {
                $data = $request->input('SEmail');
                $request->session()->put('SEmail',$data);
                $sname=$user->SName;
                Session()->put('SN',$sname);
                return redirect("Dashboard");
        }else{
            return view('scllogin');
        }

    }
   
   /* public function add(Request $request)
    {

        User::create($request->all());
        $data = $request->input('Email');
        $request->session()->put('Email',$data);
    return redirect('message');
    }
    

        public function subtract(Request $request)
    {

        User::create($request->all());
        $data = $request->input('SEmail');
        $request->session()->put('SEmail',$data);
    return redirect('message');
    }
    */

   /* public function send(Request $request){
   
            $mail_data = [
               // 'sender' =>$request->SEmail,
                'SName' =>$request->SName,
                'SEmail' =>$request->SEmail,
                'SPassword' =>$request->SPassword,
                
            ];

            Mail::send('emails.SclMail',$mail_data, function($message) use ($mail_data){
                $message->to($mail_data['SEmail'])
                        ->from($mail_data['amaranime7738@gmail.com'])
                        ->subject($mail_data['SName'],$mail_data['SEmail'],$mail_data['SPassword']);
            });

            return view('/message');

        
    }*/
    public function Sclstore(){
         User::create([
        'SName' => request('SName'),
        'SEmail' => request('SEmail'),
        'SPassword' => request('SPassword'),
        'roll2' => request()->input('roll2','3')
    ]);

    return redirect('message');

    }

   /* public function create(Request $request)
    {
        $schoolname = $request->input('schoolname');
        $schoolemail = $request->input('schoolemail');
        $schoolpassword = $request->input('schoolpassword');
        
        Mail::to($schoolemail)->send(new SchoolMail($schoolname));

        return redirect('message');
    }*/

}