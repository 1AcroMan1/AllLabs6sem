<?php
class PhotosController {
    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {
        $title = "Фотоальбом";
        $photos = $this->model->getData();
        $model = ['photos' => $photos];
        $this->view->render('PhotosView.php', $title, $model);
    }
}
?>