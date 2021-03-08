<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Single;
use App\Models\Login;
use Auth;
use DB;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function static(){
        return view('pages.static');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function products(){
        return view('pages.products');
    }

    public function product1(){
        return view('pages.read');
    }

    public function login(){
        if(session()->has('username'))
        {
            return redirect('/');
        }
        else
        {
            return view('pages.login');
        }
        
    }

    public function product($id)
    {
        $pro=Single::find($id);
        return view('pages.product',['single'=>$pro]);
    }

    public function logout(){
        if(session()->has('username') || session()->has('adminuser') )
        {
            session()->forget('username');
            session()->forget('adminuser');
            return redirect('/');
        }
        else
        {
            // setcookie('username', '', time() -3600);
            return redirect('/');
        }
    }

    Public function admin(){
        if(session()->has('adminuser'))
        {
            $singles = Single::all();
            return view('pages.dashboard',['singles'=>$singles]);
        }
        else
        {
            return view('pages/admin');
        }
        
    }

    public function login_me(Request $req){

        $name= $req->username;
        $password=$req->password;
        $data=DB::table('logins')->where(['username'=>$name,'password'=>$password])->get();
        if(count($data)>0)
        {
            session()->put('username',$name);
            return redirect('/');

            // if( ($req->remember) == 'yes')
            // {
                
            //     // setcookie('username', $name, time() + 86300);
            //     return redirect('/');
            // }
            

            // else
            // {
            //     session()->put('username',$name);
            //     return redirect('/');
            // }
        }
        else
        {
            return redirect('login')->with('flash_message_error','Invalid Username or Password');
        }

        // $login_user=Login::all()->only('username',$name);
        //  $login_password=Login::all()->only('password',$password)->toArray();
        // $data=Login::select("select id from 'logins' where 'username'=$name and 'password'=$password");
        // if (Auth::attempt(array('username' => $name, 'password' => $password)))
        // {
        //     return redirect ('/');
        // }

        // $data = Login::Where('username', $name)->get();
        
            // return view ('pages.login');
            
        

        // print_r($data);


        //     //  echo $login_password;
        //     echo '<br>';
        //     echo '<br>';

        //     echo $name;
        //     echo '<br>';
        //     echo $password;

        //     echo '<br>';
        //     echo '<br>';

            // echo $login_user;
            // echo '<br>';
            // echo $login_password;
        
        // return redirect ('pages.login');
        // $name=$req->username;
        // $result = Login::select("select id from logins where username=?" , $name)->first();
        // $password = Login::select("select * from logins where username='$req->password'")->first();
        //  $data=Login::select("select * from logins where username='$name' and password='$password'");

        //  print_r($data);
        
        // if(!empty($data))
        // {
        //     return redirect('/');
        // }
        // else
        // {
        //     return redirect('pages.login');
        // }


        
        
    }

    public function register(){
        if(session()->has('username'))
        {
            return redirect('/');
        }
        else
        {
            return view('pages.register');
        }
        
    }

    public function register_me(Request $req){
        $name= $req->username;
        $email=$req->email;
        $pass1=$req->password_1;
        $pass2=$req->password_2;
        if($pass1 == $pass2)
        {
            $data1=DB::table('logins')->where(['username'=>$name])->get();
            $data2=DB::table('logins')->where(['email'=>$email])->get();
        if((count($data1)==0) && (count($data2)==0) )
        {
            
            $register= new Login;
            $register->username=$req->username;
            $register->email=$req->email;
            $register->password=$req->password_1;
            session()->put('username',$name);
            $register->save();
            return redirect('/');
        }
        else
        {
            return redirect('register')->with('flash_message_error','This Username or Email already exists');
        }
        }
        else
        {
            return redirect('register')->with('flash_message_error','Passwords did not match');
        }
        

        
    }

    public function dashboard(Request $req){
        $name=$req->username;
        $password=$req->password;
        if(session()->has('adminuser'))
        {
            $singles = Single::all();
            return view('pages.dashboard',['singles'=>$singles]);
        }
        if(($name=='admin') && ($password=='admin'))
        {
            $singles = Single::all();
            session()->put('adminuser',$name);
            return view('pages.dashboard',['singles'=>$singles]);
        }
        else
        {
            return redirect('admin')->with('flash_message_error','Invalid Username or Password');
        }
    }

    // public function dashboard(){
    //     if(session()->has('username'))
    //     {
    //         $singles = Single::all();
    //         return view('pages.dashboard',['singles'=>$singles]);
    //     }
    //     else
    //     {
    //         return view('pages.admin');
    //     }
        
    //     // $singles = Single::all();
    //     // return view('pages.dashboard',['singles'=>$singles]);
    // }

    public function read($id){
        $singles= Single::find($id);
        return view('pages.read',['single' => $singles]);
    }

    public function insert(){
        return view('pages.insert');
    }

    public function insert_product(Request $req){
        $pro = new Single;

        $pro->proname = $req->proname;
        // $pro->propic = $req->propic;
        // $pic->move('public/uploads/', );

        $file=$req->file('propic');
        $extension=$file->getClientOriginalExtension();
        $filename=time() . '.' . $extension;
        $file->move('uploads/', $filename);
        $pro->propic=$filename;


        $pro->proprice = $req->proprice;
        $pro->prostock = $req->prostock;
        $pro->procode = $req->procode;
        $pro->prodis = $req->prodis;
        $pro->proavail = $req->proavail;
        $pro->promat = $req->promat;
        $pro->prosize = $req->prosize;
        $pro->prospecs = $req->prospecs;

        $pro->save();
        return redirect('dashboard')->with('flash_message_error','Product Added Successfully');
    }

    public function update($id){
        $singles = Single::find($id);
        return view('pages.update',['single' => $singles]);

    }

    public function delete($id){
        $singles = Single::find($id);
        $singles->delete();
        return redirect('dashboard')->with('flash_message_error','Product Deleted Successfuly');

    }

    public function update_product(Request $req){
        
        $pro = Single::find($req->id);

        $pro->proname = $req->proname;
        
        $file=$req->file('propic');
        $extension=$file->getClientOriginalExtension();
        $filename=time() . '.' . $extension;
        $file->move('uploads/', $filename);
        $pro->propic=$filename;

        $pro->proprice = $req->proprice;
        $pro->prostock = $req->prostock;
        $pro->procode = $req->procode;
        $pro->prodis = $req->prodis;
        $pro->proavail = $req->proavail;
        $pro->promat = $req->promat;
        $pro->prosize = $req->prosize;
        $pro->prospecs = $req->prospecs;

        $pro->save();
        return redirect('/dashboard');

    }

    public function publish()
    {
        $singles=Single::all();
        return view('pages.products')->with(compact('singles'));

    }
}
