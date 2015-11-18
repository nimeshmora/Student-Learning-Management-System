<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/11/2015
 * Time: 11:13 PM
 */

class StudentController extends BaseController{

    public function getProfile(){

        $user_id = Auth::user()->id;
        $user_data = DB::table('student')
            ->select('s_name','NIC','address','dob','reg_date','batch_id','s_year')
            ->where('u_id','=',$user_id)
            ->first();

        return View::make('student.student-profile',array(

            'data' =>$user_data
        ));
    }

}