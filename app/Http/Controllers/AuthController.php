<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function authlogin(Request $request)
    {
        $request->validate([
            'mail'=>'required|email',
            'passwd'=>'required|min:4'
        ]);

        $user = UsersModel::where('passwd', self::cryptin($request->post('mail'), $request->post('passwd')) )
        ->where('active', 1)->where('email', $request->post('mail'))->count();
        if($user == 1){
            $user = UsersModel::where('passwd', self::cryptin($request->post('mail'), $request->post('passwd')) )
                ->where('active', 1)->where('email', $request->post('mail'))->get();
                    $_SESSION['user_id'] = $user[0]->id;
                    $_SESSION['email'] = $user[0]->email;
            return redirect()->route('on');
            } else {
                return redirect()->back();
            }
    }
    public static function cryptin($email, $passwd)
    {
        return base64_encode(md5($email).$email.sha1($passwd));
    }
}
