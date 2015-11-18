<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/11/2015
 * Time: 11:19 PM
 */

class GradeController extends BaseController {

    public function getGrades(){

        return View::make('grades');
    }
}