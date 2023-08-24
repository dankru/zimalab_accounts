<?php

class RegisterController extends Controller
{
    private $pageTpl = '/views/registerForm.tpl.php';
    public function __construct()
    {
        $this->model = new RegisterModel();
        $this->view = new View();
    }
    public function register() {
        $this->registerUser();
        $this->pageData['title'] = 'Аккаунт';
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function registerUser() {
        if (isset($_POST['button-reg'])) {

            // Gather values from form fields
            $params = $this->getPostParams();

            // if user doesn't exist already, then create user
            if (!$this->model->checkUser($params['email'], $params['password'])) {
                $this->model->createUser($params);
                echo('Учётная запись создана');
                exit();
            } else {
                echo('Пользователь с таким номером телефона или почтой уже существует');
                exit();
            }
        }
    }
}