<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/27/2015
 * Time: 2:14 AM
 */

class TeacherController extends BaseController{

    public function getTeacherCourses(){

        $u_id = Auth::user()->id;

        DB::setFetchMode(PDO::FETCH_ASSOC);

        $t_id = DB::table('teacher')
                ->select('t_id')
                ->where('u_id','=',$u_id)
                ->first();



        $courses = DB::table('course')
                ->select('c_id','c_name')
                ->where('t_id','=',$t_id)
                ->get();



        return View::make('teacher.view-subjects',array(

            'course'=> $courses
        ));
    }

    public function postTeacherCourses(){

        $c_id = Input::get('course_id');
        Session::put('current_course', $c_id);

        DB::setFetchMode(PDO::FETCH_ASSOC);
        $students = DB::table('enrollments')
                    ->join('student', 'enrollments.s_id' ,'=' , 'student.s_id')
                    ->select('enrollments.s_id','student.s_name','student.batch_id','student.s_year')
                    ->where('c_id','=',$c_id)
                    ->get();



        return View::make('teacher.view-students',array(

            'students' => $students,
            'subject'  => $c_id

        ));
    }

    public function postMarks(){

        $course = Session::get('current_course');

        $student = Input::get('student_id');
        $grade = Input::get('grade');

        DB::table('enrollments')
            ->where('s_id','=',$student)
            ->where('c_id','=',$course)
            ->update(array('grade' => $grade));

        return View::make('teacher.view-students');

    }

    public function getProfile(){

        $user_id = Auth::user()->id;
        $user_data = DB::table('teacher')
            ->select('t_id','t_name','t_address','t_gender','t_nic')
            ->where('u_id','=',$user_id)
            ->first();

        return View::make('teacher.teacher-profile',array(

            'data' =>$user_data
        ));
    }


}