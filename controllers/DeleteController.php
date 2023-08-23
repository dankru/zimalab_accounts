<?php

class DeleteController extends Controller
{
    private $pageTpl = '/views/delete.tpl.php';
    public function __construct()
    {
        $this->model = new DeleteModel();
        $this->view = new View();
    }
    public function delete() {
        $this->model->delete();
        $this->pageData['title'] = 'Удаление';
        $this->view->render($this->pageTpl, $this->pageData);
    }
}