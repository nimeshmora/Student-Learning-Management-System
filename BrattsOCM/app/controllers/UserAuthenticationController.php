<?php


/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/11/2015
 * Time: 11:34 PM
 */

class UserAuthenticationController extends BaseController
{

    public function getSignOut(){

        Auth::logout();
        return Redirect::route('login');
    }

    public function getLogin()
    {

        return View::make('user-login');
    }

    public function postLogIn()
    {

        if (Auth::check()) {
            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                    return Redirect::route('admin-view');
                    break;
                case 'student':
                    return Redirect::route('');
                    break;
                case 'teacher':
                    return Redirect::route('dashboard-logged-staff');
                    break;
            }
        } else {

            $validator = Validator::make(Input::all(), array(

                'user_name' => 'required',
                'password' => 'required'
            ));

            if ($validator->fails()) {

                return Redirect::route('login')
                    ->withErrors($validator)
                    ->withInput();
            } else {

                //   $remember = (Input::has('remember-me')) ? true : false;


                $auth = Auth::attempt(array(

                    'username' => Input::get('user_name'),
                    'password' => Input::get('password')

                ));


                if ($auth) {

                    $role = Auth::user()->role;


                    switch ($role) {
                        case 'admin':
                            return Redirect::route('admin-view');
                            break;
                        case 'student':
                            return Redirect::route('student-view');
                            break;
                        case 'teacher':
                            return Redirect::route('admin-view');
                            break;

                        default:
                            $this::logOut();
                    }

                } else {
                    return Redirect::route('login')
                        ->with('global', 'Wrong Username or Password!');
                    //}

                }
            }
        }
    }

    public function getDashboard()
    {

        return View::make('course-summary');
    }

    public function getSignUp()
    {

        return View::make('register');

    }

    public function postSignUp()
    {

        $validator = Validator::make(Input::all(),

            array(
                'username' => 'required|max:250|min:5',
                'password' => 'required|max:250',
                'confirm-password' => 'required|same:password',
                'role' => 'required|in:student,teacher'

            )

        );

        if ($validator->fails()) {

            return Redirect::route('signup')
                ->withErrors($validator)
                ->withInput();
        } else {

            //$insertToUser = DB::table('user')->max('company_id');

            $username = Input::get('username');
            $password = Input::get('password');
            $role = Input::get('role');

            $userId = DB::table('user')->insertGetId(
                [   'username' => $username,
                    'role' => $role,
                    'password' => Hash::make($password)
                ]);

            if($userId){

                return Redirect::route('role-details');
            }else{

                return Redirect::route('signup');
            }

        }

    }

    public function getRoleDetails(){

        return View::make('role-details');
    }
}





