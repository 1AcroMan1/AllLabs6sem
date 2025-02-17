<?php
class CustomFormValidation extends FormValidation {
    public function isName($data) {
        $error = parent::isNotEmpty($data);
        if ($error) {
            return $error;
        }

        $parts = explode(" ", $data);
        if (count($parts) !== 3) {
            return 'ФИО должно состоять из 3 слов и содержать только буквы.';
        }

        foreach ($parts as $part) {
            if (!preg_match('/^[а-яА-ЯёЁa-zA-Z]+$/u', $part)) {
                return 'ФИО должно содержать только буквы.';
            }
        }
        return null; 
    }
}
?>
