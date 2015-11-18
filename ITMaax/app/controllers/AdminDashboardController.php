<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/15/2015
 * Time: 9:19 PM
 */

class AdminDashboardController extends BaseController {

    public function getAdminDashboard(){

        $student_count = DB::table('student')->count('s_id');
        $teacher_count = DB::table('teacher')->count('t_id');
        $course_count = DB::table('course')->count('c_id');
        $batch_count = DB::table('student')->distinct('batch_id')->count('batch_id');

        return View::make('admin-dashboard',array(

            'student_count' => $student_count,
            'teacher_count' => $teacher_count,
            'course_count' => $course_count,
            'batch_count' => $batch_count

        ));

    }



}