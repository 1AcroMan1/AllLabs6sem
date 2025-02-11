<?php
class MyInterestsController {

    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {
        $title = "Мои интересы";
        $interests = [];

        $interests['anch1'] = $this->model->getRandomInterests(0, 3);
        $interests['anch2'] = $this->model->getRandomInterests(1, 3);
        $interests['anch3'] = $this->model->getRandomInterests(2, 2);
        $interests['anch4'] = $this->model->getRandomInterests(3, 1);

        $photos = $this->model->getPhotos();

        $categorys = $this->model->getCategorys();

        $model = [
            'interests' => $interests,
            'photos' => $photos,
            'categorys' => $categorys
        ];
        
        $this->view->render('MyInterestsView.php', $title, $model);
    }
}
?>
