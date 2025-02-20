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

            $this->model->validator->SetRule('name', 'isNotEmpty');
            $this->model->validator->SetRule('surname', 'isNotEmpty');
            $this->model->validator->SetRule('thirdName', 'isNotEmpty');
            $this->model->validator->SetRule('e-mail', 'isEmail');
            $this->model->validator->SetRule('text', 'isNotEmpty');

            $this->model->validator->validate($_POST);

            if(!empty($errors))
            {
                $this->model->validator->errors = $errors;
            }

            else
            {
 		        $model =[
                    'errors' => $this->model->validator->showErrors(),
                ];
            }
        }
        else
        {
            $model = [];
        }
        $this->view->render('TestView.php', $title, $model);
    }
}
?>