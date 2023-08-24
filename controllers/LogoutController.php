<?php

class LogoutController extends Controller
{
    public function logout(){
        session_start();
        session_unset();
        header('Location: http://localhost/zimalab/');
    }
}