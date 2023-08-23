<?php

class UpdateController extends Controller
{
    private $pageTpl = '/views/update.tpl.php';
    public function __construct()
    {
        $this->model = new UpdateModel();
        $this->view = new View();
    }
    //TODO:insert id from session
    public function update() {
        $id = $_SESSION['user']['id'];
        echo ($id);
        $this->updateUser($id);
        $this->pageData['title'] = 'Обновление';
        $this->view->render($this->pageTpl, $this->pageData);
    }
    private function updateUser($id){
        $params = $this->getPostParams();
        if ($this->model->update('account', $id, $params)){
            $this->pageData['updated'] = true;
        } else {
            return false;
        }

    }
}