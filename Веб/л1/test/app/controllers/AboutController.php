<?php
class AboutController {

    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {
        $title = "Главная страница";
        $message = "Это сообщение с контроллера.";
        $model = ['message' => $message];
        $this->view->render('AboutView.php', $title, $model);
    }
}
?>