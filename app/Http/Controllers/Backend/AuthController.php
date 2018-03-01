<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use Illuminate\Support\Facades\Input;
class AuthController extends Controller
{
  public function toLogin(){

     if (Auth::guest())
        return view('auth.login');

        return redirect()->guest('/');

  }
  public function checkLogin(Request $request){
        
        $rules = [
             'username' => 'required',
             'password' => 'required'
         ];

         $input = Input::only('username', 'password');
         $validator = Validator::make($input, $rules);
         if($validator->fails())
         {
             return Redirect::back()->withInput()->withErrors($validator);
         }

         $credentialUser = [
             'username' => Input::get('username'),
             'password' => Input::get('password'),
         ];
    
         if ( ! Auth::attempt($credentialUser) )
         {
            $success = [trans('ชื่อผู้ใช้งาน หรือรหัสผ่านไม่ถูกต้อง')];
            return back()->withErrors([$success]);
         }
         return redirect()->action('Backend\PangControlController@index');


  }
  public function AuthRegister(Request $request){
        $messages = [
        'username.required' => 'กรุณากรอกชื่อผู้ใช้/Username',
        'fullName.required' => 'กรุณากรอกชื่อ-สกุล',
        'email.required' => 'กรุณากรอก E-mail',
        'email.unique' => 'กรุณากรอก E-mail ที่ไม่ซ้ำในระบบ',
        'password.required' => 'กรุณากรอกรหัสผ่าน',
        'password.confirmed' => 'กรุณากรอกรหัสผ่านให้ตรงกัน',
      ];

        $validator = Validator::make($request->all(), [
          'username' => 'required|string|max:255|unique:users',
          'fullName' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }

        $user = User::create([
            'username' => $request['username'],
            'fullName' => $request['fullName'],
            'role' => 'user',
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);           
         $success = [trans('คุณได้สมัครสมาชิก เรียบร้อย')];
        return redirect('login')->with('success', $success);


  }


}
