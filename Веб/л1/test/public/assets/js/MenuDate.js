$(document).ready(function () {
    updateTime();
});

function updateTime() {
    const $container = $('#dates');
    const currentDate = new Date();
    $container.empty();
    $('<div>', {
        class: 'nav-item',
        text: `часы/месяц/гг: ${currentDate.getHours()} ${currentDate.getMonth() + 1} ${currentDate.getFullYear().toString().slice(-2)}`
    }).appendTo($container);
    console.log('Обновлено время');
    setTimeout(updateTime, 1000);
}
