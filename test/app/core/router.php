<?php
class Router
{
    static function route()
    {
        // Получаем имя контроллера или "page" по умолчанию
        $controller_name = isset($_REQUEST["controller"]) ? $_REQUEST["controller"] : "About";
        // Получаем имя экшена или "index" по умолчанию
        $action_name = isset($_REQUEST['action']) ? $_REQUEST['action'] : "index";

        // Путь и имя файла контроллера
        $controller_file = "app/controllers/" . $controller_name . 'Controller.php';

        // Проверяем наличие файла контроллера и завершаем работу в случае его отсутствия
        if (file_exists($controller_file)) {
            include $controller_file;
        } else {
            die("ОШИБКА! Файл контроллера $controller_file не найден!");
        }

        // Создаем экземпляр контроллера
        $controller_class_name = ucfirst($controller_name) . 'Controller';
        $controller = new $controller_class_name;

        // Получаем имя модели и имя файла модели
        $model_name = $controller_name . 'Model';
        $model_file = "app/models/" . $model_name . '.php';

        // Проверяем наличие файла модели и завершаем работу в случае его отсутствия
        if (file_exists($model_file)) {
            include $model_file;
        } else {
            die("ОШИБКА! Файл модели $model_file не найден");
        }

        // Создаем экземпляр модели
        $model_class_name = ucfirst($controller_name) . 'Model';
        $model = new $model_class_name;

        // Присваиваем экземпляр модели соответствующему полю контроллера
        $controller->model = $model;

        // Вызываем экшн контроллера
        if (method_exists($controller, $action_name)) {
            $controller->$action_name();
        } else {
            die("ОШИБКА! Отсутствует метод $action_name контроллера $controller_class_name");
        }
    }
}
?>