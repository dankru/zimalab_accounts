<?php

// IndexController extends from Controller, so it has the same properties and functions
class IndexController extends Controller
{
    private $pageTpl = '/views/main.tpl.php';
    public function __construct() {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = "Аккаунтер";
        $this->view->render($this->pageTpl, $this->pageData);
    }
}