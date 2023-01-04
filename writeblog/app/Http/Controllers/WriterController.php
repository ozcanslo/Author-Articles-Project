<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Blogger;
use App\Models\Writer;

class WriterController extends Controller
{
   public function homepage(){
        return view('include.home');
    }
    public function index(){
        return view('login');
    }

    public function writerLogin(Request $request){
       $request-> validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $author = Writer::where('email','=',$request->email)->first();
        if($author){
            if(Hash::check($request->password , $author->password)){
                $request->session()->put('LoginId', $author->id);
                return redirect('home');
            }
            else{
                return back()->with('fail','Wrong password!');
            }
        }else{
            return back()->with('fail','Email not registered');
        }
}
    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function authorAdd(){
        return view('include.authoradd');
    }
    public function authorAddPost(Request $request){
        $request->validate([
            'namesurname'=> 'required',
            'mail'=> 'required|email:rfc,dns',
            'phone'=> 'required'
        ]);
        Blogger::create([
            'namesurname'=> $request -> namesurname,
            'mail'=> $request -> mail,
            'phone'=> $request -> phone,
        ]);
        return redirect()->route('author-add')->with('success','Author successfully added');
    }
    public function authorList(){
        $bloggers=Blogger::all();
        return view('include.authorlist',compact('bloggers'));
    }
    public function authorUpdate($id)
    {
        $authorinfo=Blogger::whereId($id)->first();
        if($authorinfo)
        {
            return view('include.authorupdate',compact('authorinfo'));
        }
        else
        {
            return redirect()->route("author-list");
        }
    }
    public function authorUpdatePost(Request $request,$id){
        $request->validate([
            'namesurname'=> 'required',
            'mail'=> 'required|email:rfc,dns',
            'phone'=> 'required'
        ]);
        Blogger::whereId($id)->update([
            'namesurname'=>$request->namesurname,
            'mail'=>$request->mail,
            'phone'=>$request->phone
        ]);
        return redirect()->route('author-list')->with('success','Author successfully updated!');
    }
    public function authorDelete($id)
    {
        $authorinfo=Blogger::whereId($id)->first();
        if($authorinfo)
        {
            Blogger::whereId($id)->delete();
        }
        return redirect()->route('author-list')->with('success','Author Deleted!');
    }

}
