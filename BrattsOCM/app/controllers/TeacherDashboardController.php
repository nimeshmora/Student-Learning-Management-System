<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/28/2015
 * Time: 9:44 PM
 */

class TeacherDashboardController extends BaseController {

    public function getTeacherDashboard(){

        $user_id = Auth::user()->id;

        DB::setFetchMode(PDO::FETCH_ASSOC);

        $t_id = DB::table('teacher')->select('t_id')->where('u_id','=',$user_id)->first();
        $course_count = DB::table('course')->distinct('c_id')->where('t_id','=',$t_id)->count('c_id');


        $reg_nmber = DB::table('teacher')->select('t_id')->where('u_id','=',$user_id)->first();
        $nic = DB::table('teacher')->select('t_nic')->where('u_id','=',$user_id)->first();
        $address = DB::table('teacher')->select('t_address')->where('u_id','=',$user_id)->first();


        return View::make('teacher.teacher-dashboard',array(

            'c_count' => $course_count,
            'reg'     => $reg_nmber,
            'nic'     => $nic,
            'address' => $address
        ));
    }

}