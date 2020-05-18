<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;




class AdminController extends Controller
{
    public function index(){
        //echo "TST";
        return view('admin.login');
    }

    public function Check_login(Request $request)
    {
       //dd($request->all());


        $msg = [
            'email.required' => 'Enter Your Email',
            'password.required' => 'Enter Your Password',
        ];
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'

        ], $msg);


        $remember_me = $request->has('remember_me') ? true : false;
        $email = $request->get('email');
         $pass = $request->get('password');
        
        if (Auth::attempt(array('email' => $email, 'password' => $pass,'user_type'=>'Admin'), $remember_me)) {

            $check_email = Auth::user()->email;
            $request->session()->put('email', $check_email);
            $user_type = Auth::user()->user_type;
            $request->session()->put('user_type', $user_type);
           

            if($user_type=='Admin'){
                
               return redirect(route('admin::dashboard'));
                
            }
        } else {
            return redirect()->back()->with('error', 'Login Failed !!! Please check Your Email and Password.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect('/admin')->with('logout','Logout Successfully !!!');
    }

    public function changePassForm()
    {
        return view('admin.password.changePassword');
    }

    public function ChangePass(Request $request)
    {
        $msg = [
            'old_pass.required' => 'Enter Your Old Password',
            'new_pass.required' => 'Enter Your New Password',
            'confirm_pass.required' => 'Enter Your Confirm Pasword',
        ];
        $this->validate($request, [
            'old_pass' => 'required|min:6',
            'new_pass' => 'required|min:6',
            'confirm_pass' => 'required|min:6',
        ], $msg);
        $old_pass=$request->old_pass;
        $new_pass=$request->new_pass;
        $confirm_pass=$request->confirm_pass;
        $id=Auth::user()->id;
        $pass=User::where('id',$id)->value('password');
        if(Hash::check($old_pass,$pass)){
            if($new_pass==$confirm_pass){
                $password=Hash::make($new_pass);
                $changePass=User::where('id',$id)->update([
                    'password' => $password,
                ]);
                if($changePass==true){
                    return redirect()->back()->with('success',"Password Updated Sucessfully !!!" );
                }
            }
            else{
                return redirect()->back()->with('error',"New Password and Confirm Password are Not Matched !!!" );
            }
        }
        else{
            return redirect()->back()->with('error',"Old Password Not Matched !!!" );
        }

    }
    public function profile(){
        $userId = Auth::id();
        $userById=User::where('id',$userId)->first();
       // print_r($userById);
        return view('admin.profile.index',compact('userById'));
    }

    public function updateProfile(Request $request){
        $msg = [
            'first_name.required' => 'Enter Your  First Name',
            'last_name.required' => 'Enter Your Last Name',
            'email.required' => 'Enter Your Email',
        ];
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ], $msg);

       $id = $request->get('id');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $email = $request->get('email');

        $users = User::all();
//echo "<pre>";
//print_r($users);
//die;
       // dd($request->all());
        User:: where('id',$id)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
        ]);



        return redirect()->back()->with('success', 'Profile Updated Successfully !!!');
    }
}
