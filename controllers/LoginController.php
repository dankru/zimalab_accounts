<?php

class LoginController extends Controller
{

    private $pageTpl = '/views/loginForm.tpl.php';
    public function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new View();
    }
    public function login() {
        session_start();
        $this->pageData['title'] = 'Аккаунт';
        $this->pageData['isLogged'] = false;
        if (!isset($_SESSION['user'])){
            $this->loginUser();
        } else {
            $this->pageData['accountInfo'] = $_SESSION['user'];
            $this->pageData['isLogged'] = true;
        }
        $this->view->render($this->pageTpl, $this->pageData);
    }
    // login user
    public function loginUser() {
        if (isset($_POST['button-log'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            // if user exists then logged
            $user = $this->model->checkUser($email, $password);
            if($user){
                $this->pageData['isLogged'] = true;
                $this->pageData['accountInfo'] = $user;
                $_SESSION['user'] = $user;
            }
        }
    }
}