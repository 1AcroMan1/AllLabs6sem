(function () {
    const pages = [
        { id: 'main', name: 'Главная страница' },
        { id: 'about', name: 'Обо мне' },
        { id: 'dropdown-container', name: 'Мои интересы' },
        { id: 'learning', name: 'Учёба' },
        { id: 'photos', name: 'Фотоальбом' },
        { id: 'contacts', name: 'Контакты' },
        { id: 'discTest', name: 'Тест по дисциплине' },
        { id: 'history', name: 'История просмотра' }
    ];

    // Обработка кликов по элементам страниц
    pages.forEach(page => {
        const $pageElement = $(`#${page.id}`);
        if ($pageElement.length) {
            $pageElement.on('click', () => {
                console.log(`Клик по странице: ${page.name}`);
                updateStorage(page.name, 1, sessionStorage);
                updateStorage(page.name, 1, localStorage);
                updateCookie(page.name, 1, 30);
            });
        } else {
            console.log(`Элемент с id ${page.id} не найден`);
        }
    });

    // Функции для обновления данных в хранилищах и куках
    function updateStorage(key, value, storage) {
        const currentCount = parseInt(storage.getItem(key) || 0) + value;
        storage.setItem(key, currentCount);
    }

    function updateCookie(key, value, expirationDays) {
        const currentCount = parseInt(getCookie(key) || 0) + value;
        setCookie(key, currentCount, expirationDays);
        console.log(`Обновлённый cookie для ${key}: ${currentCount}`);
    }

    function getCookie(name) {
        const cookie = document.cookie.split('; ').find(row => row.startsWith(name + '='));
        return cookie ? cookie.split('=')[1] : null;
    }

    function setCookie(name, value, expirationDays) {
        const date = new Date();
        date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = `${name}=${value}; ${expires}; path=/`;
    }

    // Заполнение таблиц с использованием sessionStorage, localStorage и cookies
    $(document).ready(() => {
        const $sessionTable = $('#sessionHistory');
        const $allTimeContainer = $('#HistoryTable');

        if ($sessionTable.length) {
            pages.forEach(page => {
                const $tr = $('<tr></tr>');
                $tr.append(`<td>${page.name}</td>`);
                $tr.append(`<td>${sessionStorage.getItem(page.name) || 0}</td>`);
                $sessionTable.append($tr);
            });
        }

        if ($allTimeContainer.length) {
            const $table = $('<table></table>');
            const $headerRow = $('<tr></tr>');
            $headerRow.append('<th>Страница</th>');
            $headerRow.append('<th>Количество кликов (localStorage)</th>');
            $headerRow.append('<th>Количество кликов (cookies)</th>');
            $table.append($headerRow);

            pages.forEach(page => {
                const $tr = $('<tr></tr>');
                $tr.append(`<td>${page.name}</td>`);
                $tr.append(`<td>${localStorage.getItem(page.name) || 0}</td>`);
                $tr.append(`<td>${getCookie(page.name) || 0}</td>`);
                $table.append($tr);
            });

            $allTimeContainer.append($table);
        }
    });
})();
