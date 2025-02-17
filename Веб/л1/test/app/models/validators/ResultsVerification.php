<?php
require 'app/models/validators/CustomFormValidation.php';
class ResultsVerification extends CustomFormValidation {
    private $correctAnswers;

    public function __construct($correctAnswers) {
        $this->correctAnswers = $correctAnswers;
    }

   public function verifyAnswers($userAnswers) {
    $results = [];
    foreach ($this->correctAnswers as $question => $correctAnswer) {
        if (isset($userAnswers[$question])) {
            $userAnswer = $userAnswers[$question];

            if (is_array($correctAnswer)) {
                if (is_array($userAnswer)) {
                    sort($userAnswer);
                    sort($correctAnswer);
                    $results[$question] = ($userAnswer === $correctAnswer);
                } else {
                    $results[$question] = false;
                }
            } else {
                if (is_array($userAnswer)) {
                    $results[$question] = false;
                } else {
                    $results[$question] = (strcasecmp($userAnswer, $correctAnswer) === 0);
                }
            }
        } else {
            $results[$question] = false;
        }
    }
    return $results;
}



    public function showResults($verificationResults) {
        $output = "<h3>Результаты проверки:</h3><ul>";
        foreach ($verificationResults as $question => $isCorrect) {
            $status = $isCorrect ? "Правильно" : "Неправильно";
            $output .= "<li>Вопрос: $question - $status</li>";
        }
        $output .= "</ul>";
        return $output;
    }
}
?>
