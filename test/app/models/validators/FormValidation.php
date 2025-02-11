<?php
class FormValidation {
    public $nums = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    public $extraNums = [];
    public $rules = [];
    public $errors = [];

    public function isNotEmpty($data) {

        if ($data === null) {
            return 'Поле не должно быть пустым.';
        }

        return null;
    }

    public function isInteger($data) {
        if (!filter_var($data, FILTER_VALIDATE_INT)) {
            return 'Значение должно быть типа int.';
        }
        return null;
    }

    public function isLess($data, $value) {
        if ($this->isInteger($data) !== null || (int)$data > (int)$value) {
            return 'Значение должно быть не больше ' . $value . '.';
        }
        return null;
    }

    public function isGreater($data, $value) {
        if ($this->isInteger($data) !== null || (int)$data < (int)$value) {
            return 'Значение должно быть не меньше ' . $value . '.';
        }
        return null;
    }

    public function isEmail($data) {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return 'Некорректный адрес электронной почты.';
        }
        return null;
    }

    public function isPhone($data)
{
    if($this->isNotEmpty($data))
    {
         return 'Поле пустое';
    }
    $this->extraNums = ['+7', '+3'];
    $isValid = false;

    foreach ($this->extraNums as $num) {
        if (strpos($data, $num) === 0) {
            $numberPart = substr($data, strlen($num));
            if (preg_match('/^\d{7,10}$/', $numberPart) && strlen($numberPart) >= 7 && strlen($numberPart) <= 10) {
                $isValid = true;
                break;
            }
        }
    }

    if (!$isValid) {
        return 'Введите корректный номер телефона. Формат: +7XXXXXXXXXX или +3XXXXXXXXXX';
    }

    return null; 
}

    public function isName($data)
    {
        if($this->isNotEmpty($data))
        {
            return 'Поле пустое';
        }

        $parts = explode(" ", $data);
        if (count($parts) !== 3) {
            return 'ФИО должно состоять из 3 слов и содержать только букв';
        }
        else
        {
            foreach ($parts as $part)
            {
                if (!preg_match('/^[а-яА-ЯёЁa-zA-Z]+$/u', $part))
                {
                    return 'ФИО должно состоять из 3 слов и содержать только буквs';
                }
            }
        }
        return null;
    }

    public function setRule($field_name, $validator_name) {
        $this->rules[$field_name][] = $validator_name;
    }

    public function validate($post_array) {
        foreach ($this->rules as $field_name => $validators) {
            foreach ($validators as $validator) {
                if (method_exists($this, $validator)) {
                    $error = $this->$validator($post_array[$field_name] ?? null);
                    if ($error) {
                        $this->errors[$field_name][] = $error;
                    }
                }
            }
        }
    }

    public function showErrors() {
        if (empty($this->errors)) {
            return 'Валидация пройдена';
        }

        $html = '<ul>';
        foreach ($this->errors as $field => $messages) {
            foreach ($messages as $message) {
                $html .= '<li>' . htmlspecialchars($message) . '</li>';
            }
        }
        $html .= '</ul>';
        return $html;
    }
}
?>
