<?php
class TestController {
    private $correctAnswers = [
        'question1' => 'answer1', 
        'question2' => ['answer2a', 'answer2b'],
        'question3' => 'answer3',
    ];
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
		$filteredPostData = array_slice($_POST, 2);
	 	var_dump($filteredPostData );
                $verificationResults = $this->model->validator->verifyAnswers($filteredPostData);
 		$model = [
                    'errors' => $this->model->validator->showErrors(),
                    'results' => $this->model->validator->showResults($verificationResults)
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