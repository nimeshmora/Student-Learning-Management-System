<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/11/2015
 * Time: 11:34 PM
 */

class UserAuthenticationController extends BaseController{

    public function getLogin(){

        return View::make('user-login');
    }
}