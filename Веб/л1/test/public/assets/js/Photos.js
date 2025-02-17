$(document).ready(function () {
    const imagePath = "/public/assets/img/";
    const arrayImage1 = [];
    const desc = [];
    const randomDesc = ['Описание', 'Plingi', 'хг', '10x10', 'Квазар'];
    let currentIndex = 0;

    // Создаем массив изображений и описаний
    for (let i = 0; i < 15; i++) {
        arrayImage1.push(imagePath + "img" + i + ".jpg");
        let rand = Math.floor(Math.random() * randomDesc.length);
        desc.push(randomDesc[rand]);
    }

    const $container = $(".flexflex");
    const $bigImageContainer = $("<div>", { class: "bigImageContainer" }).appendTo("body");
    const $bigImageContent = $("<div>", { class: "bigImageContent" }).appendTo($bigImageContainer);

    const $bigImage = $("<img>", { class: "bigImage" }).appendTo($bigImageContent);
    const $prevButton = $("<button>", { class: "arrow prev", text: "❮" }).appendTo($bigImageContent);
    const $nextButton = $("<button>", { class: "arrow next", text: "❯" }).appendTo($bigImageContent);
    const $photoCounter = $("<div>", { id: "photoCounter" }).appendTo($bigImageContent);
    const $closeButton = $("<button>", { class: "closeButton", text: "✖" }).appendTo($bigImageContent);

    // Создаем миниатюры изображений
    arrayImage1.forEach((src, i) => {
        const $item = $("<div>", { class: "flexflexItem" });
        const $img = $("<img>", { src, class: "smallImage" });
        const $tip = $("<div>", { class: "tip", text: desc[i] });

        $img.on("click", function () {
            currentIndex = i;
            showBigImage(currentIndex);
        });

        $item.append($img, $tip);
        $container.append($item);
    });

    // Показ большого изображения
    function showBigImage(index) {
        $bigImage.attr("src", arrayImage1[index]);
        $photoCounter.text(`Фото ${index + 1} / ${arrayImage1.length}`);
        $bigImageContainer.fadeIn();
    }

    // Закрытие большого изображения
    function closeBigImage() {
        $bigImageContainer.fadeOut();
    }

    // Переключение изображений
    function changePhoto(step) {
        currentIndex += step;
        if (currentIndex < 0) currentIndex = arrayImage1.length - 1;
        if (currentIndex >= arrayImage1.length) currentIndex = 0;
        showBigImage(currentIndex);
    }

    // Обработчики событий
    $prevButton.on("click", function () {
        changePhoto(-1);
    });

    $nextButton.on("click", function () {
        changePhoto(1);
    });

    $closeButton.on("click", closeBigImage);

    $bigImageContainer.on("click", function (e) {
        if (e.target === this) closeBigImage();
    });
});
