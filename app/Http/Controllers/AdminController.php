<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Information;


class AdminController extends Controller
{
     public function editHome()
    {
        $homePage = Page::where('slug', 'home')->first();

        return view('admin.home.edit', compact('homePage'));
    }

    public function updateHome(Request $request)
    {
        $homePage = Page::where('slug', 'home')->first();

        if (!$homePage) {
        // If no home page is found, create a new one
        $homePage = new Page();
        $homePage->slug = 'home';
    }
        $homePage->content = $request->input('content');
        // Update other fields as per your requirements

        $homePage->save();

        return redirect()->back()->with('success', 'Home page updated successfully.');
    }

    public function editAbout()
    {
        $aboutPage = Page::where('slug', 'about')->first();

        return view('admin.about.edit', compact('aboutPage'));
    }

    public function updateAbout(Request $request)
    {
        $aboutPage = Page::where('slug', 'about')->first();
        if (!$aboutPage) {
        // If no home page is found, create a new one
        $aboutPage = new Page();
        $aboutPage->slug = 'about';
    }

        $aboutPage->content = $request->input('content');
        // Update other fields as per your requirements

        $aboutPage->save();

        return redirect()->back()->with('success', 'About page updated successfully.');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
// adding school code
    public function addUser(Request $request)
    {
         $request->validate([
            'SName' => 'required',
            'SEmail' => 'required|email|unique:users',
            'SPassword' => 'required|min:6',
        ]);
        // Create a new user
        $user = User::create([
        'SName' => $request->input('SName'),
        'SEmail' => $request->input('SEmail'),
        'SPassword' => $request->input('SPassword'),
        'roll2' => $request->input('roll2'),
        'approved' => $request->input('approved'),
        ]);
        return redirect('admin/dashboard')->with('success', 'User successfully creat.');
    }

    public function update_home()
{
    $user= Information::all();
   

    return view('admin.update_home',compact('user'));


}
    public function updatehomeAD(Request $request){
    $home = Information::where('key', 'Home')->first();


    // 4 image change

    if($request->file('slide1') && $request->file('slide2') && $request->file('slide3')  && $request->file('image') ){
       
      
        $slide1=$request->file('slide1');
        $slide2 =$request->file('slide2');
        $slide3 =$request->file('slide3');
        $image =$request->file('image');

        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();

        $home->slide1=$slide1;
        $home->slide2=$slide2;
        $home->slide3=$slide3;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');
        $home->image=$image;

        $home->save();
        



    }
// 3 image change :- 1. (1,2,3) 2.(1,2,4) 3.(1,3,4) 4.(2,3,4)

    // 1. 1,2,3


    elseif ($request->file('slide1') && $request->file('slide2') && $request->file('slide3') ) {
        $slide1=$request->file('slide1');
        $slide2 =$request->file('slide2');
        $slide3 =$request->file('slide3');

        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();

        $home->slide1=$slide1;
        $home->slide2=$slide2;
        $home->slide3=$slide3;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();
        
    }

    // 2. 1,2,4
    elseif ($request->file('slide1') && $request->file('slide2') && $request->file('image')) {
        $slide1=$request->file('slide1');
        $slide2 =$request->file('slide2');
        $image =$request->file('image');

        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();

        $home->slide1=$slide1;
        $home->slide2=$slide2;
        $home->image=$image;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();
        
}
// 3.  1,3,4
    elseif ($request->file('slide1') && $request->file('slide3') && $request->file('image')) {
        $slide1=$request->file('slide1');
        $slide3 =$request->file('slide3');
        $image =$request->file('image');

        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();

        $home->slide1=$slide1;
        $home->slide3=$slide3;
        $home->image=$image;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();
        
}

// 4.2,3,4
   elseif ($request->file('slide2') && $request->file('slide3') && $request->file('image')) {
        $slide2=$request->file('slide2');
        $slide3 =$request->file('slide3');
        $image =$request->file('image');

        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();

        $home->slide2=$slide2;
        $home->slide3=$slide3;
        $home->image=$image;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();
        
}


    elseif ($request->file('slide1') && $request->file('slide2') && $request->file('slide3') ) {
        
        $slide1=$request->file('slide1');
        $slide2 =$request->file('slide2');
        $slide3 =$request->file('slide3');

        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();

        $home->slide1=$slide1;
        $home->slide2=$slide2;
        $home->slide3=$slide3;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();
        
    }elseif ($request->file('slide1') && $request->file('slide2') && $request->file('slide3')  && $request->file('image') ) {
        $slide1=$request->file('slide1');
        $slide2 =$request->file('slide2');
        $slide3 =$request->file('slide3');
        $image =$request->file('image');

        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();

        $home->slide1=$slide1;
        $home->slide2=$slide2;
        $home->slide3=$slide3;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');
        $home->image=$image;

        $home->save();
        
        
    }
    elseif ($request->file('slide1') && $request->file('slide2')) {
         $slide1=$request->file('slide1');
        $slide2 =$request->file('slide2');
        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $home->slide1=$slide1;
        $home->slide2=$slide2;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

    }
    elseif ($request->file('slide1') && $request->file('slide3')) {
         $slide1=$request->file('slide1');
        $slide3 =$request->file('slide3');
        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $home->slide1=$slide1;
        $home->slide3=$slide3;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

    }
    elseif ($request->file('slide1') && $request->file('image')) {
         $slide1=$request->file('slide1');
        $image =$request->file('image');
        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();
        $home->slide1=$slide1;
        $home->image=$image;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

    }
    elseif ($request->file('slide2') && $request->file('slide3')) {
         $slide2=$request->file('slide2');
        $slide3 =$request->file('slide3');
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $home->slide2=$slide2;
        $home->slide3=$slide3;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

    }
    elseif ($request->file('slide2') && $request->file('image')) {
         $slide2=$request->file('slide2');
        $image =$request->file('image');
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();
        $home->slide2=$slide2;
        $home->image=$image;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

    }
    elseif ($request->file('slide3') && $request->file('image')) {
         $slide3=$request->file('slide3');
        $image =$request->file('image');
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();
        $home->slide3=$slide2;
        $home->image=$image;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

    }
     elseif($request->file('slide1')){
        $slide1=$request->file('slide1');
        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $home->slide1=$slide1;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

    }
       elseif ($request->file('slide2')) {
        $slide2=$request->file('slide2');
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $home->slide2=$slide2;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

        
    }
        elseif ($request->file('slide3')) {
        $slide3=$request->file('slide3');
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $home->slide3=$slide3;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

        
    }
        elseif ($request->file('image')) {
        $image=$request->file('image');
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();
        $home->image=$image;
        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');

        $home->save();

        
    }




    else{

        $home->heading=$request->input('heading');
        $home->body=$request->input('body');
        $home->author=$request->input('author');
        $home->card_title=$request->input('card_title');
        $home->card_body=$request->input('card_body');
        $home->save();
    }
    return redirect()->back();





}

public function key(Request $request){

        $slide1 =$request->file('slide1');
        $slide2 =$request->file('slide2');
        $slide3 =$request->file('slide3');
        $image =$request->file('image');
        

        $slide1->move(public_path('img'), $slide1->getClientOriginalName());
        $slide1= $slide1->getClientOriginalName();
        $slide2->move(public_path('img'), $slide2->getClientOriginalName());
        $slide2= $slide2->getClientOriginalName();
        $slide3->move(public_path('img'), $slide3->getClientOriginalName());
        $slide3= $slide3->getClientOriginalName();
        $image->move(public_path('img'), $image->getClientOriginalName());
        $image= $image->getClientOriginalName();

        $Information = new Information();
        $Information->key=$request->key;
        $Information->heading=$request->heading;
        $Information->body=$request->body;
        $Information->slide1=$slide1;
        $Information->slide2=$slide2;
        $Information->slide3=$slide3;
        $Information->image=$image;
        $Information->save();
        
        
        
        


       

        return redirect()->back();





}

}
