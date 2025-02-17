<?php
require 'app/models/validators/ResultsVerification.php';
class TestModel {
    public $validator;
    public $correctAnswers = [
	'answer1' => 'Матрица',
	'answer2' => ['squ', 'rec'],
	'answer3' => ['13', '52']
    ];
    function __construct()
    {
        $this->validator = new ResultsVerification($this->correctAnswers);
    }
    function validate($post_data)
    {
        $this->validator->validate($post_data);
    }
    public function getData() {
        // Логика для получения данных
        return "Данные страницы";
    }
}
?>