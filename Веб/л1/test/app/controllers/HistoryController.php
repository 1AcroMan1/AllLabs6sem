<?php
class HistoryController {

    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {
        $title = "История просмотра";
        $message = "Это сообщение с контроллера.";
        $model = ['message' => $message];
        $this->view->render('HistoryView.php', $title, $model);
    }
}
?>