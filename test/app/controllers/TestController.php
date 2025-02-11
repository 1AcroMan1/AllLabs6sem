<?php
class TestController {

    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {
        $title = "Тест";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            var_dump($_POST);

            $this->model->validator->SetRule('name', 'isName');
            $this->model->validator->SetRule('group', 'isNotEmpty');
            $this->model->validator->SetRule('answer1', 'isNotEmpty');
            $this->model->validator->SetRule('answer2', 'isNotEmpty');
            $this->model->validator->SetRule('answer3', 'isNotEmpty');

            $this->model->validator->validate($_POST);

            if(!empty($errors))
            {
                $this->model->validator->errors = $errors;
            }

            else
            {
                //...
            }
            $model = [
                'errors' => $this->model->validator->showErrors()
            ];
        }
        else
        {
            $model = [];
        }
        $this->view->render('TestView.php', $title, $model);
    }
}
?>