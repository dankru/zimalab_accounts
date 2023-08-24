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
        session_start();
        $id = $_SESSION['user']['id'];
        if ($this->model->delete('account', $id)) {
            session_unset();
            $this->pageData['deleted'] = true;
        } else{
            $this->pageData['deleted'] = false;
        }
        $this->pageData['title'] = 'Удаление';
        $this->view->render($this->pageTpl, $this->pageData);
    }
}