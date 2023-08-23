<?php

class ContentController extends Controller
{
    private $pageTpl = '/views/content.tpl.php';
    public function __construct()
    {
        $this->model = new ContentModel();
        $this->view = new View();
    }
    public function content() {
        $this->pageData['title'] = "Аккаунты";
        $this->pageData['count'] = $this->model->countAccounts();
        $this->pageData['accountList'] = $this->model->selectAllAccounts();
        $this->view->render($this->pageTpl, $this->pageData);
    }
}