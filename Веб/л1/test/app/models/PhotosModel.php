<?php
class PhotosModel {
    const IMAGE_PATH = "/public/assets/img/";
    const IMAGE_COUNT = 15;
    private static $filenames = [];
    private static $descriptions = [
        'Описание 1', 'Описание 2', 'Описание 3', 'Описание 4', 'Описание 5',
        'Описание 6', 'Описание 7', 'Описание 8', 'Описание 9', 'Описание 10',
        'Описание 11', 'Описание 12', 'Описание 13', 'Описание 14', 'Описание 15'
    ];
    public function __construct() {
        for ($i = 0; $i < self::IMAGE_COUNT; $i++) {
            self::$filenames[] = self::IMAGE_PATH . "img" . $i . ".jpg";
        }
    }
    public function getData() {
        $photos = [];
        for ($i = 0; $i < self::IMAGE_COUNT; $i++) {
            $photos[] = [
                'filename' => self::$filenames[$i],
                'description' => self::$descriptions[$i]
            ];
        }
        return $photos;
    }
}
?>