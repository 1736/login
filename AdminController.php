<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function show(){
        $admin=Admin::orderBy('date','desc')->get();
        return view('back.admin.admin',['admin'=>$admin]);
    }
    public function add(Request $request){
            $checkusername=Admin::where('username',$request->username)->count();
            $checkemail=Admin::where('email',$request->email)->count();
            if($checkusername>0){
                return "username";
                // return redirect('admin_add');
            }else if($checkemail>0){
                return "email";
                    // return redirect('admin_add');
            }else{
                $password=hash("sha256",$request->password);
                $admin=Admin::insert([
                    'name'=>$request->name,
                    'username'=>$request->username,
                    'password'=>$password,
                    'email'=>$request->email,
                    'date'=>$request->date
                    ]);
                    if($request->registered=="registered"){
                        return view('login');
                    }else{
                        return redirect('admin');
                    }
            }
            
        
    }
    public function showone(Request $request,$id){

        $admin=Admin::find($id);
        $name=$request->name;
        return view('back.admin.admin_edit',['admin'=>$admin,'name'=>$name]);
    }
    public function edit(Request $request){
        $orderPaper=($request->orderPaper=="")?"N":"Y";
        if(!empty($request->Newpassword)){
            $Newpassword=hash("sha256",$request->Newpassword);
            $admin=Admin::find($request->id);
                $admin->uname=$request->uname;
                $admin->password=$Newpassword;
                $admin->email=$request->email;
                $admin->sex=$request->sex;
                $admin->orderPaper=$orderPaper;
                $admin->birthday=$request->birthday;
                $admin->phone=$request->phone;
                $admin->Area=$request->Area;
                $admin->cityarea=$request->cityarea;
                $admin->cuszip=$request->cuszip;
                $admin->cusadr=$request->cusadr;
                $admin->save();
                return redirect('admin');
        }else{
            $admin=Admin::find($request->id);
            $admin->uname=$request->uname;
            $admin->email=$request->email;
            $admin->sex=$request->sex;
            $admin->orderPaper=$orderPaper;
            $admin->birthday=$request->birthday;
            $admin->phone=$request->phone;
            $admin->Area=$request->Area;
            $admin->cityarea=$request->cityarea;
            $admin->cuszip=$request->cuszip;
            $admin->cusadr=$request->cusadr;
            
            $admin->save();
            return redirect('admin');
        }
    }
    public function delete($id){

        $admin=Admin::find($id);
        $admin->delete();
        return redirect('admin');
    }
    public function sh($id){
        $sh=Admin::find($id);
        $sh->sh=($sh->sh+1)%2;
        $sh->save();
        return back();
    }
    public function login(Request $request){
        $pw=hash("sha256",$request->password);
        $check=Admin::where([['username',$request->username],['password',$pw]])->count();
    if($check>0){
        session(['admin'=>$request->username]);
       return view('index');
    }else{
        return redirect('/');
    }
    }
    public function logout(){
        session()->flush();
        return redirect('/');
    }
}