<?php

class AccountController extends Controller
{
    private $pageTpl = '/views/account.tpl.php';
    public function __construct()
    {
        $this->model = new AccountModel();
        $this->view = new View();
    }
    public function account() {
        $this->pageData['title'] = "Аккаунты";
        $this->pageData['count'] = $this->model->countAccounts();
        $this->pageData['accountList'] = $this->model->selectAllAccounts();
        $this->view->render($this->pageTpl, $this->pageData);
    }
}