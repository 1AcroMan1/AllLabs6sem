<?php
require 'app/models/validators/FormValidation.php';
class GuestModel {
    public $validator;
    function __construct()
    {
        $this->validator = new FormValidation();
    }
    function validate($post_data)
    {
        $this->validator->validate($post_data);
    }
    public function getData() {
        return "Данные страницы";
    }
    public function saveData()
    {
        
    }
}
?>