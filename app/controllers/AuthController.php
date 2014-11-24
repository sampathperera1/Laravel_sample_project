<?php

class AuthController extends BaseController
{
    /*
     * render usr login form
     */

    public function login()
    {
        if (Auth::check()) {
            return Redirect::to('profile');
        }
        return View::make('login');
    }

    /*
     * logout user & distroy the session
     */

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return Redirect::to('/');
    }

    /*
     * validate input and login user
     */

    public function handleLogin()
    {

        $data = Input::only(['username', 'password']);
        $validator = Validator::make(
                        $data, [
                    'username' => 'required',
                    'password' => 'required|min:6',
                        ]
        );

        if ($validator->fails()) {
            return Redirect::to('login')->withErrors($validator)->withInput();
        }

        if (Auth::validate(['username' => $data['username'], 'password' => $data['password']])) {
            $user = User::where('username', '=', $data['username'])->first();
            if ($user->status == 0) {   // inactive
                return Redirect::to('login')->withErrors("Account Not Activated! Please check your email and click activation link.")->withInput();
            }
            if ($user->status == 2) {   // disabled
                return Redirect::to('login')->withErrors("Account disabled by admin!")->withInput();
            }
            $remember = (Input::get('remember') ? true : false);
            Auth::login($user, $remember);
            return Redirect::to('profile');
        }

        return Redirect::to('login')->withErrors("Invalid Username/Password")->withInput();
    }

    /*
     * validate the token and activate user
     */

    public function activate($token)
    {
        $tokenObj = Token::find($token);
        if (!$tokenObj) {
            return View::make('activate')->withErrors('Invalid Token!');
        }
        if ($tokenObj->status != 1) {
            return View::make('activate')->withErrors('Expired Token!');
        }
        if ($tokenObj->status == 1 && $tokenObj->type == 1) {
            $tokenObj->user->status = 1;
            $tokenObj->user->save();
            //Auth::login($tokenObj->user); Are we need to login?
            $tokenObj->status = 0;
            $tokenObj->save();
            return View::make('activate')->with('success', true);
        }
        return View::make('activate')->withErrors('Ooops!');
    }

    /*
     * render forgot password form
     */

    public function forgot()
    {
        if (Auth::check()) {
            return Redirect::to('profile');
        }
        return View::make('forgot_password');
    }

    /*
     * render forgot password form
     */

    public function forgotSuccess()
    {
        return View::make('forgot_password_success');
    }

    /*
     * validate username and email token
     */

    public function handleForgot()
    {

        $data = Input::only(['username']);
        $validator = Validator::make(
                        $data, [
                    'username' => 'required',
                        ]
        );

        if ($validator->fails()) {
            return Redirect::to('forgot_password')->withErrors($validator)->withInput();
        }

        $user = User::where('username', '=', $data['username'])->first();
        if ($user) {
            if ($user->status == 0) {   // inactive
                return Redirect::to('login')->withErrors("Account Not Activated! Please check your email and click activation link.")->withInput();
            }
            if ($user->status == 2) {   // disabled
                return Redirect::to('login')->withErrors("Account disabled by admin!")->withInput();
            }
            $token = Token::generateToken($user->id, 2);
            Mail::send('emails.forgot_password', array('first_name' => $user->first_name, 'token' => $token), function($message) use ($user) {
                $message->to($user->email, $user->first_name)->subject('Reset Password!');
            });
            return Redirect::to('forgot_password/success')->with('email', $user->email);
        }

        return Redirect::to('forgot_password')->withErrors("Invalid Username")->withInput();
    }

    /*
     * validate the token and render reset passford form
     */

    public function resetPasswd($token)
    {
        $tokenObj = Token::find($token);
        if (!$tokenObj) {
            return View::make('reset_passwd')->with('token_message', 'Invalid Token!');
        }
        if ($tokenObj->status != 1) {
            return View::make('reset_passwd')->with('token_message', 'Expired Token!');
        }
        if ($tokenObj->status == 1 && $tokenObj->type == 2) {
            return View::make('reset_passwd')->with('success', true);
        }
        return View::make('reset_passwd')->withErrors('Ooops!');
    }

    /*
     * validate the token and input, set new password
     */

    public function handelResetPasswd($token)
    {
        $tokenObj = Token::find($token);
        if (!$tokenObj) {
            return Redirect::to('reset_password/'.$token)->withErrors("Invalid Token!")->withInput();
        }
        if ($tokenObj->status != 1) {
            return Redirect::to('reset_password/'.$token)->withErrors("Expired Token!")->withInput();
        }
        if ($tokenObj->status == 1 && $tokenObj->type == 2) {   // Valid token
            $data = Input::only(['password', 'password_confirmation']);
            $validator = Validator::make(
                            $data, [
                        'password' => 'required|min:6|confirmed',
                        'password_confirmation' => 'required',
                            ]
            );

            if ($validator->fails()) {
                return Redirect::to('reset_password/'.$token)->withErrors($validator)->withInput();
            }

            if ($tokenObj->user) {
                $tokenObj->user->password = Hash::make($data['password']);
                $tokenObj->user->save();
                $tokenObj->status = 0;
                $tokenObj->save();
                return View::make('reset_passwd_success');
            }
        }
        return View::make('reset_passwd')->withErrors('Ooops!');
    }

}
