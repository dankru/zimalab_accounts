<?php

class LogoutController extends Controller
{
    public function logout(){
        session_unset();
        header('Location: http://localhost/zimalab/');
    }
}