<?php
class View
{
	public function render($view, $title, $model) {
        extract($model);
        $content = 'app/views/' . $view;

        if (file_exists($content)) {
            include "app/views/$view"; 
        } else {
            throw new Exception("View not found: " . $content);
        }
    }
}
?>