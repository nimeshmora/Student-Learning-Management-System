<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/19/2015
 * Time: 1:58 AM
 */

class StudentDashboardController extends BaseController
{

    public function getStudentDashboard()
    {

        return View::make('student-dashboard');

    }
}