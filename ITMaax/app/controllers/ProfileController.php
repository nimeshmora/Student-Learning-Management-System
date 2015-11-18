<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/11/2015
 * Time: 11:24 PM
 */

class ProfileController extends BaseController{

    public function getProfile(){

        return View::make('user-profile');

    }
}