<?php

class UserController extends BaseController
{

     /*
     * render user profile page
     */
    public function profile()
    {
        if (!Auth::check()) {
            return Redirect::to('login');
        }
        return View::make('profile')->with('user', Auth::user());
    }
    
     /*
     * render registration success page
     */
    public function register_success()
    {
        return View::make('register_success')->with('user', Auth::user());
    }

    /*
     * render user registration form
     */
    public function create()
    {
        if (Auth::check()) {
            return Redirect::to('profile');
        }
        return View::make('create')->with('user', new User);
    }

    /*
     * Validate the input and create/update user
     */
    public function store()
    {
        $data = Input::only(['username', 'first_name', 'last_name', 'email', 'phone_number',
                    'password', 'password_confirmation', 'address', 'city', 'country_id', 'image']);
        $validator = Validator::make(
                        $data, [
                    'username' => 'required|min:2|unique:users,username,' . (Auth::check()?Auth::user()->id:null),
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required|email',
                    'phone_number' => 'required|min:4',
                    'password' => 'required|min:6|confirmed',
                    'password_confirmation' => 'required',
                    'address' => 'required',
                    'city' => 'required',
                    'country_id' => 'required',
                        ]
        );

        if ($validator->fails()) {
            if (Auth::check()) {
                return Redirect::to('profile')->withErrors($validator)->withInput();
            }
            return Redirect::to('user')->withErrors($validator)->withInput();
        }

        $data['password'] = Hash::make($data['password']);
        if (Auth::check()) {
            Auth::user()->update($data);
            return Redirect::to('profile')->with('success', true);
        } else {
            $newUser = User::create($data);
            if ($newUser) {
                $token = Token::generateToken($newUser->id);
                Mail::send('emails.activate', array('first_name' => $newUser->first_name, 'token' => $token), function($message) use ($newUser){
                    $message->to($newUser->email, $newUser->first_name)->subject('Acctivate Account!');
                });
                return Redirect::to('register/success')->with('email', $newUser->email);
            }
        }

        return Redirect::route('user')->withInput();
    }
    
     /*
     * render user list admin view
     */
    public function userAdmin()
    {
        if (!Auth::check()) {
            return Redirect::to('login');
        }
        if (!Auth::User()->is_admin) {
            return Redirect::to('login');
        }
        return View::make('user_admin')->with('users', User::where('status', '>', '0')->orderBy('id', 'desc')->get());
    }
    
     /*
     * toggle user Enable/Disable
     */
    public function userToggleStatus($user_id)
    {
        if (!Auth::check()) {
            return 'Error';
        }
        if (!Auth::User()->is_admin) {
            return 'Error';
        }
        $user = User::find($user_id);
        if (!$user) {
            return 'No User';
        }
        $user->status = ($user->status == 1 ? 2 : 1);
        $user->save();
        return ($user->status == 1 ? "Disable" : "Enable");
    }
    
    /*
     * Handel profile image uploads
     */
    public function uploadImage()
    {
        $file = Input::file('image');
        $destinationPath = 'assets/img/';
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid('profile_', true) . $extension;
        $validator = Validator::make(
                        ['image'=> $file], 
                        ['image' => 'required|image|mimes:jpg,jpeg,png,gif',]
                        );
        if ($validator->fails()) {
            return json_encode(['error' => true, 'msg' => 'Image is not valid']);
        }
        $file->move($destinationPath, $filename);
        return json_encode(['image_name' => $filename]);
    }

}
