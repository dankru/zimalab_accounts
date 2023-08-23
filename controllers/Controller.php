<?php
// Default controller

class Controller {
    public $model;
    public $view;
    protected $pageData = array();

    public function __construct() {
            $this->view = new View();
            $this->model = new Model();
    }

    public function getPostParams() {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $companyName = $_POST['company_name'];
        $position = $_POST['position'];
        $phoneNumber1 = $_POST['phone_number1'];
        $phoneNumber2 = $_POST['phone_number2'];
        $phoneNumber3 = $_POST['phone_number3'];

        // Making params array of values
        $params = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => $password,
            'company_name' => $companyName,
            'position' => $position,
            'phone_number1' => $phoneNumber1,
            'phone_number2' => $phoneNumber2,
            'phone_number3' => $phoneNumber3,
        ];
        return $params;
    }
}