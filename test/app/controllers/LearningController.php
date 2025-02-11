<?php
class LearningController {

    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {
        $title = "Главная страница";
        $message = "Это сообщение с контроллера.";
        $model = ['message' => $message];
        $this->view->render('LearningView.php', $title, $model);
    }
}
?>