<?php

namespace App\Http\Controllers;

use App\User;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function index(){
        return view('session.login');
    }


    public function login(Request $request){

        if(User::where('employee_id',$request->employee_id)->exists()){
            if(Auth::attempt(['employee_id' => $request->employee_id, 'password' => $request->password])){
                return redirect()->route('view_users')->with('message','Welcome '.auth()->user()->name);
            }
            else{
                return back()->with('error','Wrong password');
            }
        }
        else{
            return back()->with('error','User with that employee ID is not found');
        }
    }

    public function addUser(){
        return view('user.add_user');
    }

    public function saveUser(Request $request){
        $checkUser=User::where('employee_id',$request->employee_id)->exists();
        if($checkUser){
            return back()->with('error','User already exists');
        }
        else{
            $user=new User();
            $user->name=$request->name;
            $user->surname=$request->surname;
            $user->employee_id=$request->employee_id;
            $user->national_id=$request->national_id;
            $user->email=$request->email;
            $user->password=bcrypt($request->employee_id);
            if($user->save()){
                return redirect()->route('view_users')->with('message','User successfully added');
            }
            else{
                return back()->with('error','Failed to add user');
            }

        }
    }


    public function viewUsers(){
        $users=User::where('employee_id','<>',auth()->user()->employee_id)->get();
        return view('user.view_users',compact('users'));
    }

    public function editUser($id){
        $user=User::find($id);
        return view('user.edit_user',compact('user'));
    }


    public function updateUser(Request $request){
        $user=User::where('id',$request->id)->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'employee_id'=>$request->employee_id,
            'national_id'=>$request->national_id,
            'email'=>$request->email
        ]);
        if($user){
            return redirect()->route('view_users')->with('message','User successfully updated');
        }
        else{
            return back()->with('error','Failed to update user');
        }
    }


    public function deleteUser($id){
        if(User::find($id)->delete()){
            return redirect()->route('view_users')->with('message','User successfully deleted');
        }
        else{
            return back()->with('error','Failed to delete user');
        }
    }

    public function logout(){
        Session::flush();
        return redirect()->route('start');
    }



}
