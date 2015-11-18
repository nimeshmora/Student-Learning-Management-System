<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/16/2015
 * Time: 4:29 PM
 */

class AdminController extends BaseController
{

    /*------------------------------------------------------ Teacher menu methods -------------------------------------------*/

    public function getAddTeacher()
    {

        return View::make('admin.add-teacher-form');
    }

    public function postAddTeacher()
    {

        $validator = Validator::make(Input::all(),

            array(
                'username' => 'required|max:250|min:5',
                'password' => 'required|max:250',
                'confirm-password' => 'required|same:password'

            )

        );

        if ($validator->fails()) {

            return Redirect::route('add-teacher-form')
                ->withErrors($validator)
                ->withInput();
        } else {

            //$insertToUser = DB::table('user')->max('company_id');

            $username = Input::get('username');
            $password = Input::get('password');

            $userId = DB::table('user')->insertGetId(
                ['username' => $username,
                    'password' => Hash::make($password),
                    'role' => 'teacher'
                ]);
            if ($userId) {

                return Redirect::route('add-teacher-details');
            } else {

                return Redirect::route('add-teacher-form');
            }

        }

    }

    public function getAddTeacherDetails()
    {

        return View::make('admin.teacher-details');
    }

    public function postAddTeacherDetails()
    {

        $validator = Validator::make(Input::all(),

            array(
                'fullname' => 'required|max:250|min:5',
                'address' => 'required|max:250',
                'gender' => 'required|in:male,female',
                'nic' => 'required|max:20'
            )

        );

        if ($validator->fails()) {

            return Redirect::route('add-teacher-details')
                ->withErrors($validator)
                ->withInput();
        } else {

            $user_id = DB::table('user')->max('id');

            $fullname = Input::get('fullname');
            $address = Input::get('address');
            $gender = Input::get('gender');
            $nic = Input::get('nic');

            $insertToTeacherTable = DB::table('teacher')->insert(
                ['t_name' => $fullname,
                    't_address' => $address,
                    't_gender' => $gender,
                    't_nic' => $nic,
                    'u_id' => $user_id

                ]
            );

            if ($insertToTeacherTable) {

                return Redirect::route('admin-view');
            } else {

                return Redirect::route('add-teacher-details');
            }


        }


    }

    /*------------------------------------------------------ Student menu methods -------------------------------------------*/

    public function getAddStudents(){

        return View::make('admin.add-student-form');
    }

    public function postAddStudents(){

        $validator = Validator::make(Input::all(),

            array(
                'username' => 'required|max:250|min:5',
                'password' => 'required|max:250',
                'confirm-password' => 'required|same:password'

            )

        );

        if ($validator->fails()) {

            return Redirect::route('add-student-form')
                ->withErrors($validator)
                ->withInput();
        } else {

            //$insertToUser = DB::table('user')->max('company_id');

            $username = Input::get('username');
            $password = Input::get('password');

            $userId = DB::table('user')->insertGetId(
                [   'username' => $username,
                    'password' => Hash::make($password),
                    'role' => 'student'
                ]);
            if ($userId) {

                return Redirect::route('add-student-details');
            } else {

                return Redirect::route('add-student-form');
            }

        }

    }
    public function getAddStudentDetails()
    {

        return View::make('admin.student-details');
    }

    public function postAddStudentDetails()
    {

        $validator = Validator::make(Input::all(),

            array(
                'fullname' => 'required|max:250|min:5',
                'address' => 'required|max:250',
                'gender' => 'required|in:male,female',
                'nic' => 'required|max:20',
                'dob' => 'required',
                'rd'  => 'required',
                'batch' => 'required',
                'year' => 'required|in:1,2'
            )

        );

        if ($validator->fails()) {

            return Redirect::route('add-student-details')
                ->withErrors($validator)
                ->withInput();
        } else {

            $user_id = DB::table('user')->max('id');

            $fullname = Input::get('fullname');
            $address = Input::get('address');
            $gender = Input::get('gender');
            $nic = Input::get('nic');
            $dob = Input::get('dob');
            $rd = Input::get('rd');
            $batch = Input::get('batch');
            $year = Input::get('year');

            $insertToTeacherTable = DB::table('student')->insert(
                [   's_name' => $fullname,
                    'address' => $address,
                    'gender' => $gender,
                    'NIC' => $nic,
                    'u_id' => $user_id,
                    'dob' => $dob,
                    'reg_date' => $rd,
                    'batch_id' => $batch,
                    's_year' => $year

                ]
            );

            if ($insertToTeacherTable) {

                return Redirect::route('admin-view');
            } else {

                return Redirect::route('add-student-details');
            }


        }


    }

    /*------------------------------------------------------ Student menu methods -------------------------------------------*/

    public function getAddCourses(){

        $teachers = DB::table('teacher')
            ->select('t_id','t_name')->get();

        return View::make('admin.add-courses',array(

            'teachers'=> $teachers
        ));
    }

    public function postAddCourses(){

        $validator = Validator::make(Input::all(),

            array(
                'course_name' => 'required|max:250',
                'credit' => 'required',
                'c_id' => 'required',

            ));


        if ($validator->fails()) {

            return Redirect::route('add-course')
                ->withErrors($validator)
                ->withInput();
        } else {

            $coursename = Input::get('course_name');
            $credit = Input::get('credit');
            $courseid = Input::get('c_id');
            $teacher_id = Input::get('teacher_id');

            $insertToCourse = DB::table('course')->insert(
                [   'c_name' => $coursename,
                    'c_credits' => $credit,
                    'c_id' => $courseid,
                    't_id' => @$teacher_id
                ]);
            if ($insertToCourse) {

                return Redirect::route('admin-view');
            }

        }

    }



}