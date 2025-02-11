<?php
class ContactsController {

    public function __construct()
    {
        $this->view = new View();
    }

    public function index() {

        $title = "Контакты";
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //проверка данных
            var_dump($_POST);

    	    $this->model->validator->setRule('name', 'isName');
            $this->model->validator->setRule('phone', 'isPhone');
            $this->model->validator->setRule('sex', 'isNotEmpty');
            $this->model->validator->setRule('age', 'isNotEmpty');
            $this->model->validator->setRule('date', 'isNotEmpty');

            $this->model->validator->validate($_POST);
            $errors = $this->model->validator->errors;

            if (!empty($errors)) {
                $this->model->validator->errors = $errors;
            }

            if (empty($errors)) 
            {
                //Условная загрузка в бд
            }
            $model = [
                'errors' => $this->model->validator->showErrors()
            ];
        }
        else {
            $model = [];
        }
        $this->view->render('ContactsView.php', $title, $model);
    }
}
?>