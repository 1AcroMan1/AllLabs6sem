<?php
class MyInterestsModel { 
    const INTERESTS = [
        ['профессиональная фотография', 'страстный автолюбитель', 'нравится организовывать праздничные мероприятия'],
        ['новейшие разработки в ортопедии (мед.техника)', 'повышение профессиональной компетенции (дополнительное образование, семинары, конференции)', 'служебные командировки (имеется л/а)'],
        ['адаптация первоклассников к школе', 'технология производства сухих строительных смесей', 'методы мотивирования персонала к надлежащему выполнению должностных инструкций'],
        ['технология производства сухих строительных смесей', 'методы мотивирования персонала к надлежащему выполнению должностных инструкций', 'поиск производителей и поставщиков качественной алкогольной продукции']
    ];

    const PHOTOS = [
        'anch1' => 'public/assets/img/img0.jpg',
        'anch2' => 'public/assets/img/img1.jpg',
        'anch3' => 'public/assets/img/img2.jpg',
        'anch4' => 'public/assets/img/img3.jpg',
    ];

    const CATEGORY_NAMES = ['Частные', 'Рабочие', 'Профессиональные', 'Прочие'];

    public function getRandomInterests($arrIndex, $amount) {
        if (!isset(self::INTERESTS[$arrIndex])) {
            return []; // Возвращаем пустой массив, если индекс некорректен
        }

        $interestsArray = self::INTERESTS[$arrIndex];
        return $this->randomize($interestsArray, $amount);
    }

    private function randomize($array, $amount) {
        $result = [];
        $usedIndices = [];

        while (count($result) < $amount && count($usedIndices) < count($array)) {
            $randIndex = rand(0, count($array) - 1);
            if (!in_array($randIndex, $usedIndices)) {
                $usedIndices[] = $randIndex;
                $result[] = $array[$randIndex];
            }
        }
        return $result;
    }
    
    public function getPhotos()
    {
	return self::PHOTOS;
    }

    public function getCategorys()
    {
	return self::CATEGORY_NAMES;
    }
}
?>
