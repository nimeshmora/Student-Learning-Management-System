<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/11/2015
 * Time: 11:13 PM
 */

class StudentController extends BaseController{

    public function getStudent(){

        return View::make('student');
    }

}